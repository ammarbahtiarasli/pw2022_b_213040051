<!-- Function Call -->
<script src="./js/navonscroll.js"></script>
<script>
    hide_on_scroll({
        nav_id: 'scrollNavbar',
        nav_offset: 180,
        nav_position: 'top',
        hide_onscroll_mobile: true,
        mobile_width: 576
    });
</script>

<script src="../js/myscript.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#body'))
        .catch(error => {
            console.error(error);
        });
</script>

</body>

<!-- Bootstrap js -->
<script src="./js/bootstrap.bundle.min.js"></script>

<!-- Custom js -->
<script src="./js/script.js?v=1.0"></script>

</html>
