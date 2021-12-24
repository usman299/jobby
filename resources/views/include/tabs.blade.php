<div class="tab">
    <div class="form-group allign-left padding-20">
        <div>
            <h4>Date de service*</h4>
        </div>
        <div class="form-group">
            <input type="date" name="service_date" class="form-control">
        </div>
        <div>
            <h4>Heure de la debut*</h4>
        </div>
        <div class="form-group">
            <select name="start_time" class="form-control" id="">
                <option value="">Heure de la debut</option>
                <option value="7:00">7:00</option>
                <option value="7:30">7:30</option>
                <option value="8:00">8:00</option>
                <option value="8:00">8:30</option>
                <option value="9:00">9:00</option>
                <option value="9:00">9:30</option>
                <option value="10:00">10:00</option>
                <option value="10:00">10:30</option>
                <option value="11:00">11:00</option>
                <option value="11:00">11:30</option>
                <option value="12:00">12:00</option>
                <option value="12:00">12:30</option>
                <option value="13:00">13:00</option>
                <option value="13:00">13:30</option>
                <option value="14:00">14:00</option>
                <option value="14:00">14:30</option>
                <option value="15:00">15:00</option>
                <option value="15:00">15:30</option>
                <option value="16:00">16:00</option>
                <option value="16:00">16:30</option>
                <option value="17:00">17:00</option>
                <option value="17:00">17:30</option>
                <option value="18:00">18:00</option>
                <option value="18:00">18:30</option>
                <option value="19:00">19:00</option>
                <option value="19:00">19:30</option>
                <option value="20:00">20:00</option>
                <option value="20:00">20:30</option>
                <option value="21:00">21:00</option>
            </select>
        </div>
        <h4>Durée (h)</h4>
        <div class="input_group">
            <div class="item-link hoverNone">
                <div class="group">
                    <div class="itemCountr_manual horizontal itemButtons -lg border-0 min-w-145">
                        <a href="#" data-dir="down" class="btn btn_counter rounded-circle co_down border">
                            <i class="tio-remove"></i>
                        </a>
                        <input  type="text" name="duration" class="form-control input_no color-secondary durationplus" value="3">
                        <a href="#" data-dir="up" class="btn btn_counter rounded-circle co_up bg-secondary">
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
                        <input type="text" name="hours" class="form-control input_no color-secondary rateperhour" min="9" value="9">
                        <a href="#" data-dir="up" class="btn btn_counter rounded-circle co_up bg-secondary">
                            <i class="tio-add color-white"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div>
            <div class="row">
                <div class="col-6">
                    <h4>Estimation du budget: </h4>
                    <p>Frais administratif 5€ </p>
                </div>
                <div class="col-6">
                    <h4 style="text-align: right" class="estimate_budget"> </h4>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tab">
    <div class="form-group allign-left padding-20">
        <div>
            <h4>Ajout de l’adresse*</h4>
        </div>
        <div class="form-group">
            <input type="text" name="address" placeholder="Ajout de l’adresse" class="form-control">
        </div>
        <div>
            <h4>Ajout de téléphone* </h4>
        </div>
        <div class="form-group">
            <input type="text" name="phone" placeholder="Ajout de téléphone" class="form-control">
        </div>
        <div>
            <h4>Pictures*</h4>
            <p>Télécharger 3 photos pour mieux comprendre votre demande</p>
        </div>
        <div class="row" style="width: 100%">
            <div class="col-4">
                <label for="files" class="btn" style="text-align: left; padding: 0px">
                    <img style="height: 80px; width: 100%" id="output_image" src="{{asset('assets/img/0ffd6s54.jpg')}}">
                </label>
                <input name="image1" id="files" style="visibility:hidden;" type="file">
            </div>
            <div class="col-4">
                <label for="files1" class="btn" style="text-align: left; padding: 0px">
                    <img style="height: 80px; width: 100%" id="output_image1" src="{{asset('assets/img/0ffd6s54.jpg')}}">
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
            <h4>Description*</h4>
        </div>
        <div class="form-group">
            <input type="hidden" name="lat" class="lat">
            <input type="hidden" name="long" class="long">
            <input type="hidden" name="estimate_budget" class="estimate_budgetval">
            <textarea class="form-control" placeholder="informations complémentaire" name="detail_description" id="" cols="30" rows="5"></textarea>
        </div>
    </div>
</div>
