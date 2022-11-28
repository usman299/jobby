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
            {{--                    <li><a href="{{route('countory.index')}}" class="ai-icon" aria-expanded="false">--}}
            {{--                            <i class="flaticon-381-notepad"></i>--}}
            {{--                            <span class="nav-text">Pays</span>--}}
            {{--                        </a>--}}
            {{--                    </li>--}}
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-controls-3"></i>
                    <span class="nav-text"><!-- Category -->Catégorie</span>
                </a>
                <ul aria-expanded="false">
                    {{--                                                <li><a href="{{route('category.index')}}"><!-- Category -->Catégorie</a></li>--}}
                    <li><a href="{{route('subcategory.index')}}"><!-- Sub Category --> Sous-catégorie</a></li>
                    <li><a href="{{route('childcategory.index')}}"><!-- Sub Category --> Catégorie enfant</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text"><!-- Users --> Utilisateurs</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('applicant.index')}}"><!-- applicant -->Demandeur</a></li>
                    <li><a href="{{route('jobber.index')}}"><!--  jobber --> Jobber</a></li>
                </ul>
            </li>
            {{--                <li><a href="{{route('skils.index')}}" class="ai-icon" aria-expanded="false">--}}
            {{--                            <i class="flaticon-381-notepad"></i>--}}
            {{--                            <span class="nav-text">Compétences</span>--}}
            {{--                        </a>--}}
            {{--                    </li>--}}
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text"><!-- Users --> CESU</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('checks.index')}}"><!-- applicant -->CESU Tickets</a></li>
                    <li><a href="{{route('pass.checks.index')}}"><!--  jobber --> Vérification complète</a></li>
                </ul>
            </li>
            {{--                    <li><a href="{{route('setting.create')}}" class="ai-icon" aria-expanded="false">--}}
            {{--                            <i class="flaticon-381-notepad"></i>--}}
            {{--                            <!-- APP SETTING -->--}}
            {{--                            <span class="nav-text">  Paramètre d'app</span>--}}
            {{--                        </a>--}}
            {{--                    </li>--}}
            <li><a href="{{route('slider.index')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <!-- APP SETTING -->
                    <span class="nav-text">   Bannières </span>
                </a>
            </li>
            <li><a href="{{route('paymant.details')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <!-- APP SETTING -->
                    <span class="nav-text">   Paiement </span>
                </a>
            </li>
            <li><a href="{{route('admin.jobrequest')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-internet"></i>
                    <!-- APP SETTING -->
                    <span class="nav-text">  Demande d'emploi</span>
                </a>
            </li>
            <li><a href="{{route('admin.proposal')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-network"></i>
                    <!-- APP SETTING -->
                    <span class="nav-text">Proposition </span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-save"></i>
                    <span class="nav-text">Contrat</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('admin.contract', ['status' => 1])}}">Contrat actif</a></li>
                    <li><a href="{{route('admin.contract', ['status' => 2])}}">Contrats terminés</a></li>
                    <li><a href="{{route('admin.contract', ['status' => 3])}}">Contrats annulés</a></li>
                    <li><a href="{{route('admin.contract', ['status' => 4])}}">Contrats contestés</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-settings"></i>
                    <span class="nav-text"><!-- Users --> Réglage</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('question.index')}}"><!-- question -->Question Réponse</a></li>
                    <li><a href="{{route('about.create')}}"><!--  about --> À propos de nous</a></li>
                    <li><a href="{{route('app.condition')}}"><!--  about --> Condition</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-id-card"></i>
                    <span class="nav-text"><!-- Users --> Cartes cadeaux</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('cards.index')}}"><!-- question -->Cartes cadeaux</a></li>
                    {{--                            <li><a href="{{route('about.create')}}"><!--  about --> Vente de cartes-cadeaux</a></li>--}}
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-add"></i>
                    <span class="nav-text"><!-- Users --> Paramétrer ShowCase</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('services.create')}}"><!-- question --> Service</a></li>
                    <li><a href="{{route('testi.index')}}"><!--  about --> Réussites</a></li>
                    <li><a href="{{route('jobfactory.create')}}"><!--  about --> Usine d'emplois</a></li>
                    <li><a href="{{route('blog.index')}}"><!--  about --> Blog</a></li>
                </ul>
            </li>
            <li><a href="{{route('admin.notfication')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-ring"></i>
                    <!-- APP SETTING -->
                    <span class="nav-text">Notfication </span>
                </a>
            </li>
            <li><a href="{{route('app.mail.register')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-high-volume"></i>
                    <!-- APP SETTING -->
                    <span class="nav-text">Poster </span>
                </a>
            </li>
            <li><a href="{{route('demandeur.contact')}}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <!-- APP SETTING -->
                    <span class="nav-text">Détails du contact </span>
                </a>
            </li>
            {{--                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">--}}
            {{--                            <i class="flaticon-381-television"></i>--}}
            {{--                            <span class="nav-text"><!-- Users --> Contact</span>--}}
            {{--                        </a>--}}
            {{--                        <ul aria-expanded="false">--}}
            {{--                            <li><a href="{{route('demandeur.contact')}}"><!-- question -->Demandeur Contact</a></li>--}}
            {{--                            <li><a href="{{route('jobber.contact')}}"><!--  about --> Jobber Contact</a></li>--}}
            {{--                        </ul></li>--}}
            {{--                    <li><a href="{{route('admin.questions')}}" class="ai-icon" aria-expanded="false">--}}
            {{--                            <i class="flaticon-381-add"></i>--}}
            {{--                            <!-- APP SETTING -->--}}
            {{--                            <span class="nav-text">Questions </span>--}}
            {{--                        </a>--}}
            {{--                    </li>--}}
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
        </ul>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->
