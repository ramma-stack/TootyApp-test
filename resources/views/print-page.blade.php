<div>
    <div>
        <!-- Your printable content here -->
        <h1>Printable Content</h1>
        <p>This is the content you want to print.</p>
        <button wire:click="print">Print</button>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('livewire:load', function() {
                Livewire.on('printPage', function() {
                    print();
                });
            });
        </script>
    @endpush

</div>
