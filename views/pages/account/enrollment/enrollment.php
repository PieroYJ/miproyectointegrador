  <div class="ps-my-account">

        <div class="container">

            <form class="ps-form--account ps-tab-root needs-validation" novalidate method="post">

                <ul class="ps-tab-list">

                    <li>
                        <p><a href="<?php echo $path ?>account&login">Login</a></p>
                    </li>

                    <li class="active">
                        <p><a href="<?php echo $path ?>account&enrollment">Register</a></p>
                    </li>

                </ul>

                <div class="ps-tabs">

                    <input type="hidden" value="<?php  echo CurlController::api() ?>" id="urlApi">

                    <!--=====================================
                    Register Form
                    ======================================--> 

                    <div class="ps-tab active" id="register">

                        <div class="ps-form__content">

                            <h5>Register An Account</h5>

                            <div class="form-group">

                                <input 
                                class="form-control" 
                                type="text" 
                                placeholder="First name" 
                                pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]{1,}"
                                onchange="validateJS(event, 'text')"
                                name="regFirstName"
                                required>

                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill in this field correctly.</div>

                            </div>

                            <div class="form-group">

                                <input 
                                class="form-control" 
                                type="text" 
                                placeholder="Last name"
                                pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ ]{1,}"
                                onchange="validateJS(event, 'text')" 
                                name="regLastName"
                                required>

                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill in this field correctly.</div>

                            </div>


                            <div class="form-group">

                                <input 
                                class="form-control" 
                                type="email" 
                                placeholder="Email address" 
                                pattern="[^0-9][.a-zA-Z0-9_]+([.][.a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}"
                                onchange="validateDataRepeat(event, 'email')" 
                                name="regEmail"
                                required>

                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill in this field correctly.</div>

                            </div>

                            <?php 
                                $ubiCtrl = new UbiController();
                                $countries = $ubiCtrl->getCountries();
                                $departments = $ubiCtrl->getDepartments();
                            ?>
                            <div class="form-group">
                                <select class="form-control" onchange="showUbiPeru(this.value)" name="regCountry" required>
                                    <option value="">Country</option>
                                    <?php foreach ($countries as $row) : ?>
                                        <option value="<?=$row->id?>"><?=$row->name?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please select an option correctly.</div>
                            </div>

                            <div id="ubiperu" hidden>
                                <div class="form-group">
                                    <select class="form-control" onchange="setProvinces(this.value)" id="regDepartment" name="regDepartment">
                                        <option value="">Department</option>
                                        <?php foreach ($departments as $row) : ?>
                                            <option value="<?=$row->id_department?>"><?=$row->name?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please select an option correctly.</div>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" onchange="setDistricts(this.value)" id="regProvince" name="regProvince">
                                        <option value="">Province</option>
                                    </select>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please select an option correctly.</div>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="regDistrict" name="regDistrict">
                                        <option value="">District</option>
                                    </select>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please select an option correctly.</div>
                                </div>
                                <div class="form-group text-center">
                                    <button type="button" class="ps-btn ps-btn--sm ps-btn--outline" data-toggle="modal" data-target="#map_modal">
                                        <i class="fa fa-map"></i> Seleccionar ubicación
                                    </button>
                                    <input type="hidden" id="location" name="location">
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please select a location correctly.</div>
                                </div>
                            </div>

                            <div class="form-group">

                                <input 
                                class="form-control" 
                                type="tel"
                                placeholder="Phone #1" 
                                pattern="[0-9]{9}"
                                onchange="validateJS(event, 'phone')" 
                                name="regPhone1"
                                maxlength="9" 
                                required>

                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill in this field correctly.</div>

                            </div>

                            <div class="form-group">

                                <input 
                                class="form-control" 
                                type="tel"
                                placeholder="Phone #2" 
                                pattern="[0-9]{9}"
                                onchange="validateJS(event, 'phone')" 
                                name="regPhone2"
                                maxlength="9" 
                                required>

                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill in this field correctly.</div>

                            </div>

                            <div class="form-group">

                                <input 
                                class="form-control" 
                                type="tel"
                                placeholder="Phone #3" 
                                pattern="[0-9]{9}"
                                onchange="validateJS(event, 'phone')" 
                                name="regPhone3"
                                maxlength="9" 
                                required>

                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill in this field correctly.</div>

                            </div>

                            <div class="form-group">

                                <input 
                                class="form-control" 
                                type="password" 
                                placeholder="Password" 
                                pattern="[#\\=\\$\\;\\*\\_\\?\\¿\\!\\¡\\:\\.\\,\\0-9a-zA-Z]{1,}"
                                onchange="validateJS(event, 'password')" 
                                name="regPassword"
                                required>

                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill in this field correctly.</div>

                            </div>

                            <?php

                                $register = new UsersController();
                                $register -> register();

                            ?>

                            <div class="form-group submtit">

                                <button type="submit" class="ps-btn ps-btn--fullwidth">Register</button>

                            </div>

                        </div>

                        <div class="ps-form__footer">

                            <p>Connect with:</p>

                            <ul class="ps-list--social">

                                <li>
                                    <a class="facebook" href="<?php echo $path ?>account&enrollment&facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="google" href="<?php echo $path ?>account&enrollment&google">
                                        <i class="fab fa-google"></i>
                                    </a>
                                </li>

                            </ul>

                        </div>

                    </div><!-- End Register Form -->

                </div>

            </form>

        </div>

    </div>

    <div class="modal fade bd-example-modal-lg" id="map_modal" tabindex="-1" role="dialog" aria-labelledby="mapModalLabel" data-backdrop="static">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Click sobre la ubicaci&oacute;n</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="map" style="height: 600px;"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDem3bUZsiTHum6oQxwiyJdk6GQ44u8UHY"></script>
    <script type="text/javascript">
        $(function(){ initMap(); });

        var provinces = <?=$ubiCtrl->getProvinces('', true)?>;
        var districts = <?=$ubiCtrl->getDistricts('', true)?>;
        var marker;

        function showUbiPeru(countryId)
        {
            if (countryId == 1) 
            {
                $("#ubiperu").removeAttr('hidden');
                $("#regDepartment, #regProvince, #regDistrict, #location").attr('required', 'true');
            }
            else
            {
                $("#ubiperu").attr('hidden', 'true');
                $("#regDepartment, #regProvince, #regDistrict, #location").removeAttr('required');
            }
        }

        function setProvinces(departmentId)
        {
            $("#regProvince").find('option').not(':first').remove();
            $("#regDistrict").find('option').not(':first').remove();
            if (departmentId != '') 
            {
                provinces[departmentId].forEach(
                    e => $("#regProvince").append('<option value="' + e.id_province + '">' + e.name + '</option>')
                );
            }
        }

        function setDistricts(provinceId)
        {
            $("#regDistrict").find('option').not(':first').remove();
            if (provinceId != '') 
            {
                districts[provinceId].forEach(
                    e => $("#regDistrict").append('<option value="' + e.id + '">' + e.name + '</option>')
                );
            }
        }

        function initMap() 
        {
            let map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -12.046, lng: -77.031},
                zoom: 13
            });

            map.addListener("click", (e) => {
                placeMarkerAndPanTo(e.latLng, map);
            });
        }

        function placeMarkerAndPanTo(latLng, map) {
            map.panTo(latLng);

            if (marker == null)
            {
                marker = new google.maps.Marker({
                    position: latLng,
                    map: map,
                });
            } 
            else 
            {
                marker.setPosition(latLng); 
            } 

            Swal.fire(
                'Coordenadas guardadas',
                'Latitud: ' + marker.getPosition().lat() + '<br>Longitud: ' + marker.getPosition().lng(),
                'success'
            );

            $("#location").val(marker.getPosition().lat() + ',' + marker.getPosition().lng());
        }
    </script>