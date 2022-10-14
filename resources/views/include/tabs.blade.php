<div class="tab">
    <div class="form-group allign-left padding-20">
        <div>
            <h4>Date de service*</h4>
        </div>
        <div class="form-group">

                        <input id="datepicker" type="text" name="service_date" class="form-control">
        </div>
        <div>
            <h4>Heure de la debut*</h4>
        </div>
        <div class="form-group">
            <select name="start_time" class="form-control" id="">
                <option value="">Heure de la debut</option>
                <option value="00:30">00:30</option>
                <option value="01:00">01:00</option>
                <option value="01:30">01:30</option>
                <option value="02:00">02:00</option>
                <option value="02:30">02:30</option>
                <option value="03:00">03:00</option>
                <option value="03:30">03:30</option>
                <option value="04:00">04:00</option>
                <option value="04:30">04:30</option>
                <option value="05:00">05:00</option>
                <option value="05:30">05:30</option>
                <option value="06:00">06:00</option>
                <option value="06:30">06:30</option>
                <option value="07:00">07:00</option>
                <option value="07:30">07:30</option>
                <option value="08:00">0:00</option>
                <option value="08:30">08:30</option>
                <option value="09:00">09:00</option>
                <option value="09:30">09:30</option>
                <option value="10:00">10:00</option>
                <option value="10:30">10:30</option>
                <option value="11:00">11:00</option>
                <option value="11:30">11:30</option>
                <option value="12:00">12:00</option>
                <option value="12:30">12:30</option>
                <option value="13:00">13:00</option>
                <option value="13:30">13:30</option>
                <option value="14:00">14:00</option>
                <option value="14:30">14:30</option>
                <option value="15:00">15:00</option>
                <option value="15:30">15:30</option>
                <option value="16:00">16:00</option>
                <option value="16:30">16:30</option>
                <option value="17:00">17:00</option>
                <option value="17:30">17:30</option>
                <option value="18:00">18:00</option>
                <option value="18:30">18:30</option>
                <option value="19:00">19:00</option>
                <option value="19:30">19:30</option>
                <option value="20:00">20:00</option>
                <option value="20:30">20:30</option>
                <option value="21:00">21:00</option>
                <option value="21:30">21:30</option>
                <option value="22:00">22:00</option>
                <option value="22:30">22:30</option>
                <option value="23:00">23:00</option>
                <option value="23:30">23:30</option>
                <option value="24:00">24:00</option>
            </select>
        </div>
        <h4>Durée (h)</h4>
        <div class="input_group">
            <div class="item-link hoverNone">
                <div class="group">
                    <div class="itemCountr_manual1 horizontal itemButtons -lg border-0 min-w-145">
                        <a href="#" data-dir="down" class="btn btn_counter1 rounded-circle co_down border">
                            <i class="tio-remove"></i>
                        </a>
                        <input  type="text" name="duration" class="form-control input_no color-secondary durationplus" value="1">
                        <a href="#" data-dir="up" class="btn btn_counter1 rounded-circle co_up bg-secondary">
                            <i class="tio-add color-white"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <h4>Taux horaire (€)</h4>
        <div class="input_group">
            <div class="item-link hoverNone">
                <div class="group">
                    <div class="itemCountr_manual horizontal itemButtons -lg border-0 min-w-145">
                        <a href="#" data-dir="down" class="btn btn_counter rounded-circle co_down border">
                            <i class="tio-remove"></i>
                        </a>
                        <input type="text" name="hours" class="form-control input_no color-secondary rateperhour" min="9" value="10">
                        <a href="#" data-dir="up" class="btn btn_counter rounded-circle co_up bg-secondary">
                            <i class="tio-add color-white"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-10">
                <b><p>Est-ce que vous avez besoin du jobber urgent?</p></b>
            </div>
            <div class="col-2" style="text-align: right">
                <input name="urgent" value="1" type="checkbox">
            </div>
        </div>
        <hr>
        <div>
            <div class="row">
                <div class="col-8">
                    <p>Prix de la prestation demandée </p>
                </div>
                <div class="col-4">
                    <p style="text-align: right"><strong>{{$childcatgory->price??$subcategory->price??0}}€</strong></p>
                </div>
                <div class="col-6">
                    <h4>Estimation du budget: </h4>
                </div>
                <div class="col-6">
                    <h4 style="text-align: right" class="estimate_budget"> </h4>
                </div>
                <div class="col-6">
                    <p>Frais administratif 10% </p>
                </div>
                <div class="col-6">
                    <p style="text-align: right"><strong  class="percentage"></strong></p>
                </div>
                <div class="col-6">
                    <p>Total </p>
                </div>
                <div class="col-6">
                    <p style="text-align: right"><strong  class="total"></strong></p>
                </div>
            </div>
        </div>
        <hr>
        <br>
        <br>
    </div>
</div>
<div class="tab">
    <div class="form-group allign-left padding-20">
        <div>
            <h4>Adresse*</h4>
        </div>
        <div class="form-group">
            <input name="address" placeholder="Ajout de l’adresse" required class="form-control" id="address">


        </div>
        <div class="form-row" style="display:none">
            <div class="form-group col">
                <label for="lat">{{ __('levels.latitude') }}</label>
                <input type="text" name="lat" id="lat"
                       class="form-control @error('lat') is-invalid @enderror"
                       value="{{ old('lat') }}">
                @error('lat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group col" style="display:none">
                <label for="long">{{ __('levels.longitude') }}</label>
                <input type="text" id="long" name="long"
                       class="form-control @error('long') is-invalid @enderror"
                       value="{{ old('long') }}">
                @error('long')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div>
            <h4>Ajoutez votre ville*</h4>
        </div>
        <div class="form-group">
            <input type="text" name="state" placeholder="Ajoutez votre état" class="form-control">
        </div>
        <div>
            <h4>Ajouter un code postal*</h4>
        </div>
        <div class="form-group">
            <input type="text" name="postal" placeholder="Ajouter un code postal" class="form-control">
        </div>
        --
        <div>
            <h4>Ajout de téléphone* </h4>
        </div>
        <div class="form-group">
            <input type="text" name="phone" placeholder="Ajout de téléphone" class="form-control">
        </div>
        <div>
            <h4>Photos</h4>
            <p>Télécharger 3 photos pour mieux comprendre votre demande</p>
        </div>
        <div class="row" style="width: 100%">
            <div class="col-4">
                <label for="files" class="btn" style="text-align: left; padding: 0px">
                    <img style="height: 80px; width: 100%" id="output_image"  loading="lazy"  src="{{asset('assets/img/0ffd6s54.jpg')}}">
                </label>
                <input name="image1" id="files" style="visibility:hidden;" type="file">
            </div>
            <div class="col-4">
                <label for="files1" class="btn" style="text-align: left; padding: 0px">
                    <img style="height: 80px; width: 100%" id="output_image1"  loading="lazy"  src="{{asset('assets/img/0ffd6s54.jpg')}}">
                </label>
                <input name="image2" id="files1" style="visibility:hidden;" type="file">
            </div>
            <div class="col-4">
                <label for="files2" class="btn" style="text-align: left; padding: 0px">
                    <img style="height: 80px; width: 100%" id="output_image2" src="{{asset('assets/img/0ffd6s54.jpg')}}">
                </label>
                <input name="image3" id="files2" style="visibility:hidden;" type="file">
            </div>
        </div>
        <div>
            <h4>Description</h4>
        </div>
        <div class="form-group">
            <input type="hidden" name="lat" class="lat">
            <input type="hidden" name="long" class="long">
            <input type="hidden" name="estimate_budget" class="estimate_budgetval">
            <textarea class="form-control" placeholder="informations complémentaire" name="detail_description" id="" cols="30" rows="5"></textarea>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyAeKxMwTMJzHH2AR1xt7OLWIWFMIzm-JLM&libraries=places" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.6.4/compressed/picker.js" integrity="sha512-PC6BMUJfhXSSRw6fOnyfn21Yjc/6oRUnAGUboA+uzAUkKX5K2wzUvTHPCEjfwmmfrjCuiSnf23iX8JYVlJTXmA==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.6.4/compressed/picker.time.js" integrity="sha512-wsTBGzc0ra42jNgXre39rdHpXqAkkaSN+bRrXZ3hpOvqxOtLNZns3OseDZRfGCWSs00N9HuXyKHZEzKAWCl3SA==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.6.4/translations/fr_FR.js" integrity="sha512-oppWtIxLpE9C9k/RJ/+z8pZXIh2PIuYDYsklCWMFsoTxK2bRMJ9Y86rvVZ20NkOBsjrywgEIi/tibOxJk7cXmg==" crossorigin="anonymous"></script>

<script type="text/javascript">
    $('.timepicker').pickatime({
        format: 'HH:i',
        formatSubmit: 'HH:i',
        hiddenName: true,
    });
    google.maps.event.addDomListener(window, 'load', initialize);
    function initialize() {
        var input = document.getElementById('address');
        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();
            $('#lat').val(place.geometry['location'].lat());
            $('#long').val(place.geometry['location'].lng());
        });
    }
</script>
<script>
    $(function(){
        var dtToday = new Date();

        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if(month < 10)
            month = '0' + month.toString();
        if(day < 10)
            day = '0' + day.toString();

        var minDate= year + '-' + month + '-' + day;

        $('#txtDate').attr('min', minDate);
    });
</script>

