<!--**********************************
            Footer start
        ***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="https://www.ikaedigital.com/"
                                                      target="_blank">IkaeDigital</a> 2021</p>
    </div>
</div>
<!--**********************************
    Footer end
***********************************-->
<!--**********************************
Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{asset('admin/vendor/global/global.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('admin/vendor/summernote/js/summernote.min.js')}}"></script>
<!-- Summernote init -->
<script src="{{asset('admin/js/plugins-init/summernote-init.js')}}"></script>
<script src="{{asset('admin/js/custom.min.js')}}"></script>
<script src="{{asset('admin/js/deznav-init.js')}}"></script>

<!-- Dashboard 1 -->
<script src="{{asset('admin/js/dashboard/dashboard-1.js')}}"></script>
<!-- Datatable -->
<script src="{{asset('admin/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/js/plugins-init/datatables.init.js')}}"></script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
<script>
    $('#category_id').change(function () {
        $('.subcategory_id').html('<option value="">Choisir une sous-catégorie</option>');
        var id = $(this).val();
        // alert(id);
        $.ajax({
            method: "GET",
            url: "{{url('/fetch/subcategory')}}/" + id,
            async: false,
            success: function (response) {
                $.each(response, function (i, item) {
                    $('.subcategory_id').append('<option value="' + item.id + '">' + item.title + '</option>');
                });
            },
            error: function () {
                $('#option').html('<option value="">Select</option>');
            }
        });
    });
</script>
</body>
</html>
