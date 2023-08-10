<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class Levels extends Component
{
    use WithPagination;

    public $search = '';
    public $showModal = false;

    public $levels = null;
    public $name, $level, $age, $class, $created_at, $updated_at;
    public $selectedStudentId;

    public function mount()
    {
        $this->levels = request('level');
        // dd($this->levels);
    }

    public function checkStudents()
    {
        $students = null;
        if ($this->levels === null) {
            $students = Student::with('studentClass')
                ->where('name', 'like', '%' . $this->search . '%')
                ->paginate(6);
        } else {
            $students = Student::with('studentClass')
                ->where('name', 'like', '%' . $this->search . '%')
                ->where('level', $this->levels)
                ->paginate(6);
        }

        return $students;
    }

    public function showModal($id, $check)
    {
        $student = Student::with('studentClass')->find($id);
        $this->name = $student->name;
        $this->level = $student->level;
        $this->age = $student->age;
        $this->class = $student->studentClass->name;
        $this->created_at = $student->created_at->format('d-m-Y');
        $this->updated_at = $student->updated_at->format('d-m-Y');

        if ($check === 'print') {
            $this->emit('printPage');
        } elseif ($check === 'modal') {
            $this->toggleModal();
            $this->selectedStudentId = $id;
        }
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

        $classId = Classes::where('name', $this->class)->first()->id;

        // dd($class->id, $class->name, $this->class);
        // dd($classId);

        $student->update([
            'name' => $this->name,
            'level' => $this->level,
            'age' => $this->age,
            'class_id' => $classId,
        ]);

        $this->toggleModal();
        session()->flash('message', 'Student data updated successfully.');
    }

    public function toggleModal()
    {
        $this->showModal = !$this->showModal;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $array = [
            'showLevels' => Student::distinct()->orderBy('level', 'asc')->get('level'),
            'showClasses' => Classes::get('name'),
            'students' => $this->checkStudents(),
        ];

        return view('levels', $array);
    }
}
