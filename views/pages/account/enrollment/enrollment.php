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

    <script type="text/javascript">
        var provinces = <?=$ubiCtrl->getProvinces('', true)?>;
        var districts = <?=$ubiCtrl->getDistricts('', true)?>;

        function showUbiPeru(countryId)
        {
            if (countryId == 1) 
            {
                $("#ubiperu").removeAttr('hidden');
                $("#regDepartment, #regProvince, #regDistrict").attr('required', 'true');
            }
            else
            {
                $("#ubiperu").attr('hidden', 'true');
                $("#regDepartment, #regProvince, #regDistrict").removeAttr('required');
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
    </script>