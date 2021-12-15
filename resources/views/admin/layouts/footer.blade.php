
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://www.ikaedigital.com/" target="_blank">IkaeDigital</a> 2021</p>
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

	<script src="{{asset('admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
	<script src="{{asset('admin/vendor/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('admin/js/custom.min.js')}}"></script>
	<script src="{{asset('admin/js/deznav-init.js')}}"></script>
	<script src="{{asset('admin/vendor/owl-carousel/owl.carousel.js')}}"></script>

	<!-- Chart piety plugin files -->
    <script src="{{asset('admin/vendor/peity/jquery.peity.min.js')}}"></script>

	<!-- Apex Chart -->
	<script src="{{asset('admin/vendor/apexchart/apexchart.js')}}"></script>

	<!-- Dashboard 1 -->
	<script src="{{asset('admin/js/dashboard/dashboard-1.js')}}"></script>
	 <!-- Datatable -->
    <script src="{{asset('admin/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins-init/datatables.init.js')}}"></script>

     <!-- Toastr -->
    <script src="{{asset('admin/vendor/toastr/js/toastr.min.js')}}"></script>

    <!-- All init script -->
    <script src="{{asset('admin//js/plugins-init/toastr-init.js')}}"></script>

	<script>
		function carouselReview(){
			/*  testimonial one function by = owl.carousel.js */
			jQuery('.testimonial-one').owlCarousel({
				loop:true,
				autoplay:true,
				margin:30,
				nav:false,
				dots: false,
				left:true,
				navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
				responsive:{
					0:{
						items:1
					},
					484:{
						items:2
					},
					882:{
						items:3
					},
					1200:{
						items:2
					},

					1540:{
						items:3
					},
					1740:{
						items:4
					}
				}
			})
		}
		jQuery(window).on('load',function(){
			setTimeout(function(){
				carouselReview();
			}, 1000);
		});
	</script>


	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
         <script>

        $('#category_id').change(function() {


            $('.subcategory_id').html('<option value="">Choisir une sous-catégorie</option>');
            var id = $(this).val();
            // alert(id);
            $.ajax({
                method:"GET",
                url: "{{url('/fetch/subcategory')}}/"+id,
                async: false,
                success : function(response) {

                    $.each(response, function(i, item) {

                        $('.subcategory_id').append('<option value="'+item.id+'">'+item.title+'</option>');
                    });

                },
                error: function() {
                    $('#option').html('<option value="">Select</option>');
                }
            });

        });
    </script>
        @jquery
        @toastr_js
        @toastr_render
</body>
</html>
