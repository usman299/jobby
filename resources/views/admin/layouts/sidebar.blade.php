
        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="" href="{{route('home')}}" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text"><!-- Dashboard --> Tableau de bord</span>
						</a>

                    </li>


                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-controls-3"></i>
							<span class="nav-text"><!-- Category -->Catégorie</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('category.index')}}"><!-- Category -->Catégorie</a></li>
                            <li><a href="{{route('subcategory.index')}}"><!-- Sub Category --> Sous-catégorie</a></li>

                        </ul>
                    </li>

                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-television"></i>
                            <span class="nav-text"><!-- Users --> Utilisateurs</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('applicant.index')}}"><!-- applicant -->Applicant</a></li>
                            <li><a href="{{route('jobber.index')}}"><!--  jobber --> Jobber</a></li>


                </ul>

                <li><a href="{{route('skils.index')}}" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-notepad"></i>
                            <span class="nav-text">Compétences</span>
                        </a>
                    </li>
                    <li><a href="{{route('skils.index')}}" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-notepad"></i>
                            <!-- APP SETTING -->
                            <span class="nav-text">  Paramètre d'app</span>
                        </a>
                    </li>
                   <!--  <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">

                            <i class="flaticon-381-settings-2"></i>
                            <span class="nav-text">Forms</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./form-element.html">Form Elements</a></li>
                            <li><a href="./form-wizard.html">Wizard</a></li>
                            <li><a href="./form-editor-summernote.html">Summernote</a></li>
                            <li><a href="form-pickers.html">Pickers</a></li>
                            <li><a href="form-validation-jquery.html">Jquery Validate</a></li>
                        </ul>
                    </li>
                 -->
				<!-- <div class="add-menu-sidebar">
					<img src="{{asset('admin/images/calendar.png')}}" alt="" class="mr-3">
					<p class="	font-w500 mb-0">Create Workout Plan Now</p>
				</div>
				<div class="copyright">
					<p><strong>Gymove Fitness Admin Dashboard</strong> © 2020 All Rights Reserved</p>
					<p>Made with <span class="heart"></span> by DexignZone</p>
				</div> -->
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
