    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

     <!-- TinyMCE -->
     <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

    <script>
    document.querySelectorAll('.editor').forEach((el) => {
        ClassicEditor.create(el, {
            toolbar: [
                'heading',
                '|',
                'bold',
                'italic',
                'alignment',
                'bulletedList',
                'numberedList',
                '|',
                'link',
                'insertTable',
                'emoji'
            ]
        }).catch(error => {
            console.error(error);
        });
    });
    </script>


