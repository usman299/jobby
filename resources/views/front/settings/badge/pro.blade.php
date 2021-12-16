@extends('layouts.front')
@section('content')
    <section class="padding-t-70 components_page padding-b-30">


        <div class="bg-white padding-20">
            <form action="{{route('badge.update')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="is_company" value="1">
                <div class="form-group company">
                        <label>Nom de la Société</label>
                        <div class="input_group">
                            <input type="text" class="form-control" name="company_name">
                        </div>
                    </div>
                    <div class="form-group company">
                        <label>Numéro de SIRET</label>
                        <div class="input_group">
                            <input type="number" class="form-control" placeholder="1234567890" name="siret">
                        </div>
                    </div>
                    <div class="form-group company">
                        <label>Addresse de facturation</label>
                        <div class="input_group">
                            <input type="text" class="form-control"  name="company_address">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Régime de TVA</label>
                        <select class="form-control custom-select" name="vat_type">
                                <option value="Régime micro-entreprise (Sans TVA)">Régime micro-entreprise (Sans TVA)</option>
                                <option value="Régime entreprise individuelle (Soumis à la TVA)">Régime entreprise individuelle (Soumis à la TVA)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn justify-content-center bg-primary rounded-10 btn__default full-width">
                            <span class="color-white">Sauvegarder</span>
                        </button>
                    </div>


            </form>
        </div>

        <br>
        <br>
    </section>
@endsection
