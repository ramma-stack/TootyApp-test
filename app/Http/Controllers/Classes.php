<?php

namespace App\Http\Controllers;

use App\Models\Classes as ModelsClasses;
use App\Models\Student;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Classes extends Component
{
    use WithPagination;

    public $search = '';
    public $showModal = false;
    public $createClass = false;
    public $updateClass = false;
    public $deleteClass = false;

    public $classes = null;
    public $name, $level, $age, $gender, $note, $class, $created_at, $updated_at, $to;
    public $selectedStudentId;

    public function mount()
    {
        $this->classes = request('class');
    }

    public function checkStudents()
    {
        $students = null;

        if ($this->classes === null) {
            $students = Student::with('studentClass')
                ->where('name', 'like', '%' . $this->search . '%')
                ->paginate(5);
            // dd($students);
        } else {
            $classId = ModelsClasses::where('name', $this->classes)->first()->id;

            $students = Student::with('studentClass')
                ->where('name', 'like', '%' . $this->search . '%')
                ->where('class_id', $classId)
                ->paginate(5);
        }

        return $students;
    }

    public function deleteClass()
    {
        $class = ModelsClasses::where('name', $this->classes)->first();
        $class->delete();

        redirect()->route('classes');

        $this->modalClass('deleteClass');
        session()->flash('message', 'Class deleted successfully.');
    }

    public function updateStudent($studentId)
    {
        $student = Student::findOrFail($studentId);

        $this->validate([
            'name' => 'required|min:3',
            'level' => 'required',
            'age' => 'required|numeric',
            'class' => 'required',
        ]);

        $classId = ModelsClasses::where('name', $this->class)->first()->id;

        $student->update([
            'name' => $this->name,
            'level' => $this->level,
            'age' => $this->age,
            'class_id' => $classId,
        ]);

        $this->toggleModal();
        session()->flash('message', 'Student data updated successfully.');
    }

    public function addClass()
    {
        $this->validate([
            'name' => ['required', 'min:3', Rule::unique('classes', 'name')],
            'level' => 'required',
            'age' => 'required|numeric',
            'to' => 'required|numeric',
            'gender' => 'required',
            'note' => 'required',
        ]);

        ModelsClasses::create([
            'name' => $this->name,
            'level' => $this->level,
            'age' => '[' . $this->age . ',' . $this->to . ']',
            'gender' => $this->gender,
            'note' => $this->note,
        ]);

        $this->modalClass('createClass');
        session()->flash('message', 'Class added successfully.');
    }

    public function toggleModal()
    {
        $this->showModal = !$this->showModal;
    }

    public function modalClass($check)
    {
        if ($check === 'updateClass') {
            $this->updateClass = !$this->updateClass;
        } elseif ($check === 'createClass') {
            $this->createClass = !$this->createClass;
        } elseif ($check === 'deleteClass') {
            $this->deleteClass = !$this->deleteClass;
        }
    }

    public function showModal($id, $check)
    {
        $student = Student::with('studentClass')->find($id);
        $this->name = $student->name;
        $this->level = $student->level;
        $this->age = $student->age;
        $this->class = !empty($student->studentClass->name) ? $student->studentClass->name : 'Class';
        $this->created_at = $student->created_at->format('d-m-Y');
        $this->updated_at = $student->updated_at->format('d-m-Y');

        if ($check === 'print') {
            $this->emit('printPage');
        } elseif ($check === 'modal') {
            $this->toggleModal();
            $this->selectedStudentId = $id;
        }
    }

    public function updatedArrayInput($age)
    {
        $ageRange = json_decode($age);
        $min = trim($ageRange[0]);
        $max = trim($ageRange[1]);

        $convertedString = $min . ' - ' . $max;
        return $convertedString;
    }

    public function render()
    {
        $array = [
            'showClasses' => ModelsClasses::get('name'),
            'classesInfo' => ModelsClasses::where('name', $this->classes)->first(),
            'students' => $this->checkStudents(),
        ];

        return view('classes', $array);
    }
}
