@extends('layouts.front')
@section('content')
    <section class="emPage__contact em__pkLink">
        <div class="emheadMap">
         <iframe class="google_map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d145764.42930001044!2d-61.62378917715728!3d16.251279472561283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc0565f7c5cc74972!2zMTbCsDE0JzM0LjUiTiA2McKwMzAnMTQuOSJX!5e0!3m2!1sen!2s!4v1640510569672!5m2!1sen!2s"
                        width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
{{--            <div class="pin_mark">--}}
{{--                <span></span>--}}
{{--            </div>--}}
        </div>
        <div class="embk__form">
            <form method="POST" action="{{route('app.contact.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group input-lined lined__iconed">
                    <div class="input_group">
                        <input type="text" class="form-control" id="username" name="name" placeholder="Enter full name" required="">
                        <div class="icon">
                            <svg id="Iconly_Curved_Message" data-name="Iconly/Curved/Message" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                                <g id="Message" transform="translate(2.248 2.614)">
                                    <path id="Stroke_1" data-name="Stroke 1" d="M10.222,0S7.279,3.532,5.127,3.532,0,0,0,0" transform="translate(3.613 5.653)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                    <path id="Stroke_3" data-name="Stroke 3" d="M0,8.357C0,2.089,2.183,0,8.73,0s8.73,2.089,8.73,8.357-2.183,8.357-8.73,8.357S0,14.624,0,8.357Z" transform="translate(0 0)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                        <label for="username">Nom complet</label>
                </div>
                <div class="form-group input-lined lined__iconed">
                    <div class="input_group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="example@mail.com" required="">
                        <div class="icon">
                            <svg id="Iconly_Curved_Message" data-name="Iconly/Curved/Message" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                                <g id="Message" transform="translate(2.248 2.614)">
                                    <path id="Stroke_1" data-name="Stroke 1" d="M10.222,0S7.279,3.532,5.127,3.532,0,0,0,0" transform="translate(3.613 5.653)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                    <path id="Stroke_3" data-name="Stroke 3" d="M0,8.357C0,2.089,2.183,0,8.73,0s8.73,2.089,8.73,8.357-2.183,8.357-8.73,8.357S0,14.624,0,8.357Z" transform="translate(0 0)" fill="none" stroke="#9498ac" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <label for="email">Adresse e-mail</label>
                </div>
                <div class="form-group input-lined lined__iconed"  >
                    <select class="form-control custom-select" name="subject">
                        <option value="Veuillez sélectionner">Veuillez sélectionner</option>
                        <option value="Ventes">Ventes</option>
                        <option value="Des produits">Des produits</option>
                        <option value="Les références">Les références</option>
                        <option value="Paiements">Paiements</option>
                    </select>
                    <label>Sélectionnez le sujet</label>
                </div>
                <div class="form-group input-lined">
                    <textarea class="form-control" rows="2"  name="message" id="Message" placeholder="tapez quelque chose ici..."></textarea>
                    <label for="Message">Message</label>
                </div>

                <div class="text-center">

                        <button type="submit" class="btn justify-content-center bg-blue rounded-pill btn__default full-width" ><span class="color-white">Envoyer</span></button>

                </div>

            </form>
        </div>



    </section>
@endsection
