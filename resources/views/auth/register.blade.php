@extends('layouts.guest')
@section('content')

<div class="d-flex flex-column flex-root">
    <!--begin::Authentication - Multi-steps-->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column" id="kt_create_account_stepper">
        <!--begin::Aside-->
        <div class="d-flex flex-column flex-lg-row-auto w-xl-500px bg-lighten shadow">
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <!--begin::Header-->
            <div class="d-flex flex-column flex-center p-10 pt-lg-20">
                <!--begin::Logo-->
                <a href="/login" class="mb-10 mb-lg-20">
                    <img alt="Logo" src="/assets/media/logos/logo.png" class="h-45px" />
                </a>
                <!--end::Logo-->
                <!--begin::Nav-->
                <div class="stepper-nav">
                    <!--begin::Step 1-->
                    <div class="stepper-item current" data-kt-stepper-element="nav">

                        <!--begin::Line-->
                        <div class="stepper-line w-40px"></div>
                        <!--end::Line-->
                        <!--begin::Icon-->
                        <div class="stepper-icon w-40px h-40px">
                            <i class="stepper-check fas fa-check"></i>
                            <span class="stepper-number">1</span>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Label-->
                        <div class="stepper-label">
                            <h3 class="stepper-title">Account Details</h3>
                            <div class="stepper-desc fw-bold">Fill Your Account Details</div>
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Step 1-->
                    <!--begin::Step 2-->
                    <div class="stepper-item" data-kt-stepper-element="nav">
                        <!--begin::Line-->
                        <div class="stepper-line w-40px"></div>
                        <!--end::Line-->
                        <!--begin::Icon-->
                        <div class="stepper-icon w-40px h-40px">
                            <i class="stepper-check fas fa-check"></i>
                            <span class="stepper-number">2</span>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Label-->
                        <div class="stepper-label">
                            <h3 class="stepper-title">Personal Details</h3>
                            <div class="stepper-desc fw-bold">Fill Your Personal Settings</div>
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Step 2-->
                    <!--begin::Step 3-->
                    <div class="stepper-item" data-kt-stepper-element="nav">
                        <!--begin::Line-->
                        <div class="stepper-line w-40px"></div>
                        <!--end::Line-->
                        <!--begin::Icon-->
                        <div class="stepper-icon w-40px h-40px">
                            <i class="stepper-check fas fa-check"></i>
                            <span class="stepper-number">3</span>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Label-->
                        <div class="stepper-label">
                            <h3 class="stepper-title">Education Details</h3>
                            <div class="stepper-desc fw-bold">Fill Your Education Details</div>
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Step 3-->
                    <!--begin::Step 4-->
                    
                    <!--end::Step 4-->
                    <!--begin::Step 5-->
                    <div class="stepper-item" data-kt-stepper-element="nav">
                        <!--begin::Line-->
                        <div class="stepper-line w-40px"></div>
                        <!--end::Line-->
                        <!--begin::Icon-->
                        <div class="stepper-icon w-40px h-40px">
                            <i class="stepper-check fas fa-check"></i>
                            <span class="stepper-number">5</span>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Label-->
                        <div class="stepper-label">
                            <h3 class="stepper-title">Completed</h3>
                            <div class="stepper-desc fw-bold">Woah, we are here</div>
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Step 5-->
                </div>
                <!--end::Nav-->
            </div>
            <!--end::Header-->
            <!--begin::Illustration-->
            <div class="d-flex flex-row-fluid bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-size-lg-auto bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(assets/media/logos/KDF.jpg);background-size: contain;"></div>
            <!--end::Illustration-->
        </div>
        <!--begin::Aside-->
        <!--begin::Body-->
        <div class="d-flex flex-column flex-lg-row-fluid py-10">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid">
                <!--begin::Wrapper-->
                <div class="w-lg-700px p-10 p-lg-15 mx-auto">
                    <!--begin::Form-->
                    <form class="my-auto pb-5" novalidate="novalidate" id="kt_create_account_form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                       
                        <!--begin::Step 1-->
                        <div class="current" data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-10 pb-lg-15">
                                    <!--begin::Title-->
                                    <h2 class="fw-bolder d-flex align-items-center text-dark">Your Account Details
                                    <!--end::Title-->
                                    <!--begin::Notice-->
                                   
                                    <!--end::Notice-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <!--begin::Col-->
                                            <!--begin::Option-->
                                            <div class="col-xl-6">
                                                <label class="form-label fw-bolder text-dark fs-6">Last Name</label>
                                                <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="name" autocomplete="off" />
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-xl-6">
                                                <label class="form-label fw-bolder text-dark fs-6">First Name</label>
                                                <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="firstname" autocomplete="off" />
                                            </div>
                                            <div class="fv-row mb-7">
                                                <label class="form-label fw-bolder text-dark fs-6">Email</label>
                                                <input class="form-control form-control-lg form-control-solid" type="email" placeholder="" name="email" autocomplete="off" />
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10 fv-row" data-kt-password-meter="true">
                                                <!--begin::Wrapper-->
                                                <div class="mb-1">
                                                    <!--begin::Label-->
                                                    <label class="form-label fw-bolder text-dark fs-6">Password</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input wrapper-->
                                                    <div class="position-relative mb-3">
                                                        <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password" autocomplete="off" />
                                                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                                            <i class="bi bi-eye-slash fs-2"></i>
                                                            <i class="bi bi-eye fs-2 d-none"></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Input wrapper-->
                                                    <!--begin::Meter-->
                                                    <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                                    </div>
                                                    <!--end::Meter-->
                                                </div>
                                                <!--end::Wrapper-->
                                                <!--begin::Hint-->
                                                <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
                                                <!--end::Hint-->
                                            </div>
                                            <!--end::Input group=-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-5">
                                                <label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
                                                <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password_confirmation" autocomplete="off" />
                                            </div>
                                            <!--end::Option-->
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 1-->
                        <!--begin::Step 2-->
                        <div class="" data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-10 pb-lg-15">
                                    <!--begin::Title-->
                                    <h2 class="fw-bolder text-dark">Personal Details</h2>
                                    <!--end::Title-->
                                  
                                    <!--end::Notice-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                   
                              <!--end::Label-->
                                    <!--begin::Row-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">
                                            Your photo (passport sized) 
    
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="file"  name="photo">
                                        <!--end::Input-->
                                    </div>
                                    <div class="row mb-2" data-kt-buttons="true">
                                        <label class="form-label fw-bolder text-dark fs-6">Your Phone Number *</label>
                                        <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="number" autocomplete="off" />
                                    </div>
                                        <div class="row mb-2" data-kt-buttons="true">

                                        <label class="form-label fw-bolder text-dark fs-6">Your NIN *</label>
                                        <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="nin" autocomplete="off" />
                                     
                                        <!--end::Col-->
                                    </div>
                                    <div class="row mb-2" data-kt-buttons="true">

                                        <label class="form-label fw-bolder text-dark fs-6">Fathers Name *</label>
                                        <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="fathername" autocomplete="off" />
                                     
                                        <!--end::Col-->
                                    </div>
                                    <div class="row mb-2" data-kt-buttons="true">

                                        <label class="form-label fw-bolder text-dark fs-6">Your Fathers Phone Number *</label>
                                        <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="fathernumber" autocomplete="off" />
                                     
                                        <!--end::Col-->
                                    </div>
                                    <div class="row mb-2" data-kt-buttons="true">

                                        <label class="form-label fw-bolder text-dark fs-6">Mothers Name *</label>
                                        <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="mothername" autocomplete="off" />
                                     
                                        <!--end::Col-->
                                    </div>
                                    <div class="row mb-2" data-kt-buttons="true">
                                            <label class="form-label fw-bolder text-dark fs-6">Date of birth *</label>
                                            <input class="form-control form-control-solid" placeholder="Pick date rage" id="kt_daterangepicker_3" name="dob"/>
                                        
                                        <!--end::Col-->
                                    </div>
                                    
                                    <!--end::Row-->
                                    <!--begin::Hint-->
                                    <!--end::Hint-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                               
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                
                                <!--end::Input group-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 2-->
                        <!--begin::Step 3-->
                        <div class="" data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-10 pb-lg-12">
                                    <!--begin::Title-->
                                    <h2 class="fw-bolder text-dark">Education Details</h2>
                                    <!--end::Title-->
                                    <!--begin::Notice-->
                                
                                    <!--end::Notice-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label required">Have you registered for JAMB 2020 or 2021 *
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-check-input" type="radio" value="Yes before 2021" name="jamb" id="flexRadioDefault2"/>  
                                    <label class="form-check-label" for="flexRadioChecked2">
                                        Yes before 2021
                                     </label>             
                                    <input class="form-check-input" type="radio" value="Yes this 2021" name="jamb" id="flexRadioDefault3"/>        
                                    <label class="form-check-label" for="flexRadioChecked3">
                                        Yes this 2021
                                    </label> 
                                    <input class="form-check-input" type="radio" value="Not yet" name="jamb" id="flexRadioDefault4"/>        
                                    <label class="form-check-label" for="flexRadioChecked4">
                                        Not yet
                                    </label> 
                                    <input name="jamb" class="form-control form-control-lg form-control-solid"  />
                                    <!--end::Input-->
                                </div>
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label required">Your JAMB Registration Number *

                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input name="jambno" class="form-control form-control-lg form-control-solid"  />
                                    <!--end::Input-->
                                </div>

                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label required">Your JAMB Registration form copy or result copy if appeared in JAMB before 2021 *


                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="file"  name="jambfile">
                                    <!--end::Input-->
                                </div>
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label required">Your JAMB Score if available


                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input name="jambscore" class="form-control form-control-lg form-control-solid"  />
                                    <!--end::Input-->
                                </div>
                                
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label required">Have you appeared in WAEC or NECO 



                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input class="form-check-input" type="radio" value="WAEC" name="waec" id="flexRadioDefault"/>  
                                    <label class="form-check-label" for="flexRadioChecked">
                                        WAEC
                                     </label>             
                                    <input class="form-check-input" type="radio" value="NECO" name="waec" id="flexRadioDefault1"/>        
                                    <label class="form-check-label" for="flexRadioChecked">
                                        NECO
                                    </label>                     <!--end::Input-->
                                </div>
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label required">Your WAEC/NECO Registration Number 




                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input name="jambscore" class="form-control form-control-lg form-control-solid"  />
                                    <!--end::Input-->
                                </div>
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label required">Your WAEC/NECO Results copy 



                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="file"  name="waecresult">
                                    <!--end::Input-->
                                </div>
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label required">Your primary school name 
 



                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input name="primaryschool" class="form-control form-control-lg form-control-solid"  />
                                    <!--end::Input-->
                                </div>
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label required">Your SSCE Results copy
 



                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="file"  name="ssceresult">
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label required">Which state do you belong to  </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select name="state" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Select..." data-allow-clear="true" data-hide-search="true">
                                        <option></option>
                                        <option value="Abia State">Abia State</option>
                                        <option value="Adamawa State">Adamawa State</option>
                                        <option value="Akwa Ibom State">Akwa Ibom State</option>
                                        <option value="Anambra State">Anambra State</option>
                                        <option value="Bauchi State">Bauchi State</option>
                                        <option value="Bayelsa State">Bayelsa State</option>
                                        <option value="Benue State">Benue State</option>
                                        <option value="Borno State">Borno State</option>
                                        <option value="Cross River State">Cross River State</option>
                                        <option value="Delta State">Delta State</option>
                                        <option value="Ebonyi State">Ebonyi State</option>
                                        <option value="Edo State">Edo State</option>
                                        <option value="Ekiti State">Ekiti State</option>
                                        <option value="Enugu State">Enugu State</option>
                                        <option value="Federal Capital Territory">Federal Capital Territory</option>
                                        <option value="Gombe State">Gombe State</option>
                                        <option value="Imo State">Imo State</option>
                                        <option value="Jigawa State">Jigawa State</option>
                                        <option value="Kaduna State">Kaduna State</option>
                                        <option value="Kano State">Kano State</option>
                                        <option value="Katsina State">Katsina State</option>
                                        <option value="Kebbi State">Kebbi State</option>
                                        <option value="Kogi State">Kogi State</option>
                                        <option value="Kwara State">Kwara State</option>
                                        <option value="Lagos State">Lagos State</option>
                                        <option value="Nasarawa State">Nasarawa State</option>
                                        <option value="Niger State">Niger State</option>
                                        <option value="Ogun State">Ogun State</option>
                                        <option value="Ondo State">Ondo State</option>
                                        <option value="Osun State">Osun State</option>
                                        <option value="Oyo State">Oyo State</option>
                                        <option value="Plateau State">Plateau State</option>
                                        <option value="Rivers State">Rivers State</option>
                                        <option value="Sokoto State">Sokoto State</option>
                                        <option value="Taraba State">Taraba State</option>
                                        <option value="Yobe State">Yobe State</option>
                                        <option value="Zamfara State">Zamfara State</option>
                                    </select>
                                    <!--end::Input-->
                                </div>
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label required">Which LGA you belong to  </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select name="lga" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Select..." data-allow-clear="true" data-hide-search="true">
                                        <option></option>
                                        <option value="Aba North">Aba North</option>
                                    <option value="Aba South">Aba South</option>
                                    <option value="Arochukwu">Arochukwu</option>
                                    <option value="Bende">Bende</option>
                                    <option value="Ikwuano">Ikwuano</option>
                                    <option value="Isiala Ngwa North">Isiala Ngwa North</option>
                                    <option value="Isiala Ngwa South">Isiala Ngwa South</option>
                                    <option value="Isuikwuato">Isuikwuato</option>
                                    <option value="Obi Ngwa">Obi Ngwa</option>
                                    <option value="Ohafia">Ohafia</option>
                                    <option value="Osisioma">Osisioma</option>
                                    <option value="Ugwunagbo">Ugwunagbo</option>
                                    <option value="Ukwa East">Ukwa East</option>
                                    <option value="Ukwa West">Ukwa West</option>
                                    <option value="Umu Nneochi">Umu Nneochi</option>
                                    <option value="Umuahia North">Umuahia North</option>
                                    <option value="Umuahia South">Umuahia South</option>
                                    <option value="Demsa">Demsa</option>
                                    <option value="Fufure">Fufure</option>
                                    <option value="Ganye">Ganye</option>
                                    <option value="Gayuk">Gayuk</option>
                                    <option value="Girei">Girei</option>
                                    <option value="Gombi">Gombi</option>
                                    <option value="Hong">Hong</option>
                                    <option value="Jada">Jada</option>
                                    <option value="Lamurde">Lamurde</option>
                                    <option value="Madagali">Madagali</option>
                                    <option value="Maiha">Maiha</option>
                                    <option value="Mayo Belwa">Mayo Belwa</option>
                                    <option value="Michika">Michika</option>
                                    <option value="Mubi North">Mubi North</option>
                                    <option value="Mubi South">Mubi South</option>
                                    <option value="Numan">Numan</option>
                                    <option value="Shelleng">Shelleng</option>
                                    <option value="Song">Song</option>
                                    <option value="Toungo">Toungo</option>
                                    <option value="Yola North">Yola North</option>
                                    <option value="Yola South">Yola South</option>
                                    <option value="Abak">Abak</option>
                                    <option value="Eastern Obolo">Eastern Obolo</option>
                                    <option value="Eket">Eket</option>
                                    <option value="Esit Eket">Esit Eket</option>
                                    <option value="Essien Udim">Essien Udim</option>
                                    <option value="Etim Ekpo">Etim Ekpo</option>
                                    <option value="Etinan">Etinan</option>
                                    <option value="Ibeno">Ibeno</option>
                                    <option value="Ibesikpo Asutan">Ibesikpo Asutan</option>
                                    <option value="Ibiono-Ibom">Ibiono-Ibom</option>
                                    <option value="Ika">Ika</option>
                                    <option value="Ikono">Ikono</option>
                                    <option value="Ikot Abasi">Ikot Abasi</option>
                                    <option value="Ikot Ekpene">Ikot Ekpene</option>
                                    <option value="Ini">Ini</option>
                                    <option value="Itu">Itu</option>
                                    <option value="Mbo">Mbo</option>
                                    <option value="Mkpat-Enin">Mkpat-Enin</option>
                                    <option value="Nsit-Atai">Nsit-Atai</option>
                                    <option value="Nsit-Ibom">Nsit-Ibom</option>
                                    <option value="Nsit-Ubium">Nsit-Ubium</option>
                                    <option value="Obot Akara">Obot Akara</option>
                                    <option value="Okobo">Okobo</option>
                                    <option value="Onna">Onna</option>
                                    <option value="Oron">Oron</option>
                                    <option value="Oruk Anam">Oruk Anam</option>
                                    <option value="Udung-Uko">Udung-Uko</option>
                                    <option value="Ukanafun">Ukanafun</option>
                                    <option value="Uruan">Uruan</option>
                                    <option value="Urue-Offong/Oruko">Urue-Offong/Oruko</option>
                                    <option value="Uyo">Uyo</option>
                                    <option value="Aguata">Aguata</option>
                                    <option value="Anambra East">Anambra East</option>
                                    <option value="Anambra West">Anambra West</option>
                                    <option value="Anaocha">Anaocha</option>
                                    <option value="Awka North">Awka North</option>
                                    <option value="Awka South">Awka South</option>
                                    <option value="Ayamelum">Ayamelum</option>
                                    <option value="Dunukofia">Dunukofia</option>
                                    <option value="Ekwusigo">Ekwusigo</option>
                                    <option value="Idemili North">Idemili North</option>
                                    <option value="Idemili South">Idemili South</option>
                                    <option value="Ihiala">Ihiala</option>
                                    <option value="Njikoka">Njikoka</option>
                                    <option value="Nnewi North">Nnewi North</option>
                                    <option value="Nnewi South">Nnewi South</option>
                                    <option value="Ogbaru">Ogbaru</option>
                                    <option value="Onitsha North">Onitsha North</option>
                                    <option value="Onitsha South">Onitsha South</option>
                                    <option value="Orumba North">Orumba North</option>
                                    <option value="Orumba South">Orumba South</option>
                                    <option value="Oyi">Oyi</option>
                                    <option value="Alkaleri">Alkaleri</option>
                                    <option value="Bauchi">Bauchi</option>
                                    <option value="Bogoro">Bogoro</option>
                                    <option value="Damban">Damban</option>
                                    <option value="Darazo">Darazo</option>
                                    <option value="Dass">Dass</option>
                                    <option value="Gamawa">Gamawa</option>
                                    <option value="Ganjuwa">Ganjuwa</option>
                                    <option value="Giade">Giade</option>
                                    <option value="Itas/Gadau">Itas/Gadau</option>
                                    <option value="Jama'are">Jama'are</option>
                                    <option value="Katagum">Katagum</option>
                                    <option value="Kirfi">Kirfi</option>
                                    <option value="Misau">Misau</option>
                                    <option value="Ningi">Ningi</option>
                                    <option value="Shira">Shira</option>
                                    <option value="Tafawa Balewa">Tafawa Balewa</option>
                                    <option value="Toro">Toro</option>
                                    <option value="Warji">Warji</option>
                                    <option value="Zaki">Zaki</option>
                                    <option value="Brass">Brass</option>
                                    <option value="Ekeremor">Ekeremor</option>
                                    <option value="Kolokuma/Opokuma">Kolokuma/Opokuma</option>
                                    <option value="Nembe">Nembe</option>
                                    <option value="Ogbia">Ogbia</option>
                                    <option value="Sagbama">Sagbama</option>
                                    <option value="Southern Ijaw">Southern Ijaw</option>
                                    <option value="Yenagoa">Yenagoa</option>
                                    <option value="Ado">Ado</option>
                                    <option value="Agatu">Agatu</option>
                                    <option value="Apa">Apa</option>
                                    <option value="Buruku">Buruku</option>
                                    <option value="Gboko">Gboko</option>
                                    <option value="Guma">Guma</option>
                                    <option value="Gwer East">Gwer East</option>
                                    <option value="Gwer West">Gwer West</option>
                                    <option value="Katsina-Ala">Katsina-Ala</option>
                                    <option value="Konshisha">Konshisha</option>
                                    <option value="Kwande">Kwande</option>
                                    <option value="Logo">Logo</option>
                                    <option value="Makurdi">Makurdi</option>
                                    <option value="Obi">Obi</option>
                                    <option value="Ogbadibo">Ogbadibo</option>
                                    <option value="Ohimini">Ohimini</option>
                                    <option value="Oju">Oju</option>
                                    <option value="Okpokwu">Okpokwu</option>
                                    <option value="Oturkpo">Oturkpo</option>
                                    <option value="Tarka">Tarka</option>
                                    <option value="Ukum">Ukum</option>
                                    <option value="Ushongo">Ushongo</option>
                                    <option value="Vandeikya">Vandeikya</option>
                                    <option value="Abadam">Abadam</option>
                                    <option value="Askira/Uba">Askira/Uba</option>
                                    <option value="Bama">Bama</option>
                                    <option value="Bayo">Bayo</option>
                                    <option value="Biu">Biu</option>
                                    <option value="Chibok">Chibok</option>
                                    <option value="Damboa">Damboa</option>
                                    <option value="Dikwa">Dikwa</option>
                                    <option value="Gubio">Gubio</option>
                                    <option value="Guzamala">Guzamala</option>
                                    <option value="Gwoza">Gwoza</option>
                                    <option value="Hawul">Hawul</option>
                                    <option value="Jere">Jere</option>
                                    <option value="Kaga">Kaga</option>
                                    <option value="Kala/Balge">Kala/Balge</option>
                                    <option value="Konduga">Konduga</option>
                                    <option value="Kukawa">Kukawa</option>
                                    <option value="Kwaya Kusar">Kwaya Kusar</option>
                                    <option value="Mafa">Mafa</option>
                                    <option value="Magumeri">Magumeri</option>
                                    <option value="Maiduguri">Maiduguri</option>
                                    <option value="Marte">Marte</option>
                                    <option value="Mobbar">Mobbar</option>
                                    <option value="Monguno">Monguno</option>
                                    <option value="Ngala">Ngala</option>
                                    <option value="Nganzai">Nganzai</option>
                                    <option value="Shani">Shani</option>
                                    <option value="Abi">Abi</option>
                                    <option value="Akamkpa">Akamkpa</option>
                                    <option value="Akpabuyo">Akpabuyo</option>
                                    <option value="Bakassi">Bakassi</option>
                                    <option value="Bekwarra">Bekwarra</option>
                                    <option value="Biase">Biase</option>
                                    <option value="Boki">Boki</option>
                                    <option value="Calabar Municipal">Calabar Municipal</option>
                                    <option value="Calabar South">Calabar South</option>
                                    <option value="Etung">Etung</option>
                                    <option value="Ikom">Ikom</option>
                                    <option value="Obanliku">Obanliku</option>
                                    <option value="Obubra">Obubra</option>
                                    <option value="Obudu">Obudu</option>
                                    <option value="Odukpani">Odukpani</option>
                                    <option value="Ogoja">Ogoja</option>
                                    <option value="Yakuur">Yakuur</option>
                                    <option value="Yala">Yala</option>
                                    <option value="Aniocha North">Aniocha North</option>
                                    <option value="Aniocha South">Aniocha South</option>
                                    <option value="Bomadi">Bomadi</option>
                                    <option value="Burutu">Burutu</option>
                                    <option value="Ethiope East">Ethiope East</option>
                                    <option value="Ethiope West">Ethiope West</option>
                                    <option value="Ika North East">Ika North East</option>
                                    <option value="Ika South">Ika South</option>
                                    <option value="Isoko North">Isoko North</option>
                                    <option value="Isoko South">Isoko South</option>
                                    <option value="Ndokwa East">Ndokwa East</option>
                                    <option value="Ndokwa West">Ndokwa West</option>
                                    <option value="Okpe">Okpe</option>
                                    <option value="Oshimili North">Oshimili North</option>
                                    <option value="Oshimili South">Oshimili South</option>
                                    <option value="Patani">Patani</option>
                                    <option value="Sapele">Sapele</option>
                                    <option value="Udu">Udu</option>
                                    <option value="Ughelli North">Ughelli North</option>
                                    <option value="Ughelli South">Ughelli South</option>
                                    <option value="Ukwuani">Ukwuani</option>
                                    <option value="Uvwie">Uvwie</option>
                                    <option value="Warri North">Warri North</option>
                                    <option value="Warri South">Warri South</option>
                                    <option value="Warri South West">Warri South West</option>
                                    <option value="Abakaliki">Abakaliki</option>
                                    <option value="Afikpo North">Afikpo North</option>
                                    <option value="Afikpo South (Edda)">Afikpo South (Edda)</option>
                                    <option value="Ebonyi">Ebonyi</option>
                                    <option value="Ezza North">Ezza North</option>
                                    <option value="Ezza South">Ezza South</option>
                                    <option value="Ikwo">Ikwo</option>
                                    <option value="Ishielu">Ishielu</option>
                                    <option value="Ivo">Ivo</option>
                                    <option value="Izzi">Izzi</option>
                                    <option value="Ohaozara">Ohaozara</option>
                                    <option value="Ohaukwu">Ohaukwu</option>
                                    <option value="Onicha">Onicha</option>
                                    <option value="Akoko-Edo">Akoko-Edo</option>
                                    <option value="Egor">Egor</option>
                                    <option value="Esan Central">Esan Central</option>
                                    <option value="Esan North-East">Esan North-East</option>
                                    <option value="Esan South-East">Esan South-East</option>
                                    <option value="Esan West">Esan West</option>
                                    <option value="Etsako Central">Etsako Central</option>
                                    <option value="Etsako East">Etsako East</option>
                                    <option value="Etsako West">Etsako West</option>
                                    <option value="Igueben">Igueben</option>
                                    <option value="Ikpoba Okha">Ikpoba Okha</option>
                                    <option value="Oredo">Oredo</option>
                                    <option value="Orhionmwon">Orhionmwon</option>
                                    <option value="Ovia North-East">Ovia North-East</option>
                                    <option value="Ovia South-West">Ovia South-West</option>
                                    <option value="Owan East">Owan East</option>
                                    <option value="Owan West">Owan West</option>
                                    <option value="Uhunmwonde">Uhunmwonde</option>
                                    <option value="Ado Ekiti">Ado Ekiti</option>
                                    <option value="Efon">Efon</option>
                                    <option value="Ekiti East">Ekiti East</option>
                                    <option value="Ekiti South-West">Ekiti South-West</option>
                                    <option value="Ekiti West">Ekiti West</option>
                                    <option value="Emure">Emure</option>
                                    <option value="Gbonyin">Gbonyin</option>
                                    <option value="Ido Osi">Ido Osi</option>
                                    <option value="Ijero">Ijero</option>
                                    <option value="Ikere">Ikere</option>
                                    <option value="Ikole">Ikole</option>
                                    <option value="Ilejemeje">Ilejemeje</option>
                                    <option value="Irepodun/Ifelodun">Irepodun/Ifelodun</option>
                                    <option value="Ise/Orun">Ise/Orun</option>
                                    <option value="Moba">Moba</option>
                                    <option value="Oye">Oye</option>
                                    <option value="Aninri">Aninri</option>
                                    <option value="Awgu">Awgu</option>
                                    <option value="Enugu East">Enugu East</option>
                                    <option value="Enugu North">Enugu North</option>
                                    <option value="Enugu South">Enugu South</option>
                                    <option value="Ezeagu">Ezeagu</option>
                                    <option value="Igbo Etiti">Igbo Etiti</option>
                                    <option value="Igbo Eze North">Igbo Eze North</option>
                                    <option value="Igbo Eze South">Igbo Eze South</option>
                                    <option value="Isi Uzo">Isi Uzo</option>
                                    <option value="Nkanu East">Nkanu East</option>
                                    <option value="Nkanu West">Nkanu West</option>
                                    <option value="Nsukka">Nsukka</option>
                                    <option value="Oji River">Oji River</option>
                                    <option value="Udenu">Udenu</option>
                                    <option value="Udi">Udi</option>
                                    <option value="Uzo-Uwani">Uzo-Uwani</option>
                                    <option value="Abaji">Abaji</option>
                                    <option value="Abuja Municipal Area Council">Abuja Municipal Area Council</option>
                                    <option value="Bwari">Bwari</option>
                                    <option value="Gwagwalada">Gwagwalada</option>
                                    <option value="Kuje">Kuje</option>
                                    <option value="Kwali">Kwali</option>
                                    <option value="Akko">Akko</option>
                                    <option value="Balanga">Balanga</option>
                                    <option value="Billiri">Billiri</option>
                                    <option value="Dukku">Dukku</option>
                                    <option value="Funakaye">Funakaye</option>
                                    <option value="Gombe">Gombe</option>
                                    <option value="Kaltungo">Kaltungo</option>
                                    <option value="Kwami">Kwami</option>
                                    <option value="Nafada">Nafada</option>
                                    <option value="Shongom">Shongom</option>
                                    <option value="Yamaltu/Deba">Yamaltu/Deba</option>
                                    <option value="Aboh Mbaise">Aboh Mbaise</option>
                                    <option value="Ahiazu Mbaise">Ahiazu Mbaise</option>
                                    <option value="Ehime Mbano">Ehime Mbano</option>
                                    <option value="Ezinihitte">Ezinihitte</option>
                                    <option value="Ideato North">Ideato North</option>
                                    <option value="Ideato South">Ideato South</option>
                                    <option value="Ihitte/Uboma">Ihitte/Uboma</option>
                                    <option value="Ikeduru">Ikeduru</option>
                                    <option value="Isiala Mbano">Isiala Mbano</option>
                                    <option value="Isu">Isu</option>
                                    <option value="Mbaitoli">Mbaitoli</option>
                                    <option value="Ngor Okpala">Ngor Okpala</option>
                                    <option value="Njaba">Njaba</option>
                                    <option value="Nkwerre">Nkwerre</option>
                                    <option value="Nwangele">Nwangele</option>
                                    <option value="Obowo">Obowo</option>
                                    <option value="Oguta">Oguta</option>
                                    <option value="Ohaji/Egbema">Ohaji/Egbema</option>
                                    <option value="Okigwe">Okigwe</option>
                                    <option value="Orlu">Orlu</option>
                                    <option value="Orsu">Orsu</option>
                                    <option value="Oru East">Oru East</option>
                                    <option value="Oru West">Oru West</option>
                                    <option value="Owerri Municipal">Owerri Municipal</option>
                                    <option value="Owerri North">Owerri North</option>
                                    <option value="Owerri West">Owerri West</option>
                                    <option value="Unuimo">Unuimo</option>
                                    <option value="Auyo">Auyo</option>
                                    <option value="Babura">Babura</option>
                                    <option value="Biriniwa">Biriniwa</option>
                                    <option value="Birnin Kudu">Birnin Kudu</option>
                                    <option value="Buji">Buji</option>
                                    <option value="Dutse">Dutse</option>
                                    <option value="Gagarawa">Gagarawa</option>
                                    <option value="Garki">Garki</option>
                                    <option value="Gumel">Gumel</option>
                                    <option value="Guri">Guri</option>
                                    <option value="Gwaram">Gwaram</option>
                                    <option value="Gwiwa">Gwiwa</option>
                                    <option value="Hadejia">Hadejia</option>
                                    <option value="Jahun">Jahun</option>
                                    <option value="Kafin Hausa">Kafin Hausa</option>
                                    <option value="Kaugama">Kaugama</option>
                                    <option value="Kazaure">Kazaure</option>
                                    <option value="Kiri Kasama">Kiri Kasama</option>
                                    <option value="Kiyawa">Kiyawa</option>
                                    <option value="Maigatari">Maigatari</option>
                                    <option value="Malam Madori">Malam Madori</option>
                                    <option value="Miga">Miga</option>
                                    <option value="Ringim">Ringim</option>
                                    <option value="Roni">Roni</option>
                                    <option value="Sule Tankarkar">Sule Tankarkar</option>
                                    <option value="Taura">Taura</option>
                                    <option value="Yankwashi">Yankwashi</option>
                                    <option value="Birnin Gwari">Birnin Gwari</option>
                                    <option value="Chikun">Chikun</option>
                                    <option value="Giwa">Giwa</option>
                                    <option value="Igabi">Igabi</option>
                                    <option value="Ikara">Ikara</option>
                                    <option value="Jaba">Jaba</option>
                                    <option value="Jema'a">Jema'a</option>
                                    <option value="Kachia">Kachia</option>
                                    <option value="Kaduna North">Kaduna North</option>
                                    <option value="Kaduna South">Kaduna South</option>
                                    <option value="Kagarko">Kagarko</option>
                                    <option value="Kajuru">Kajuru</option>
                                    <option value="Kaura">Kaura</option>
                                    <option value="Kauru">Kauru</option>
                                    <option value="Kubau">Kubau</option>
                                    <option value="Kudan">Kudan</option>
                                    <option value="Lere">Lere</option>
                                    <option value="Makarfi">Makarfi</option>
                                    <option value="Sabon Gari">Sabon Gari</option>
                                    <option value="Sanga">Sanga</option>
                                    <option value="Soba">Soba</option>
                                    <option value="Zangon Kataf">Zangon Kataf</option>
                                    <option value="Zaria">Zaria</option>
                                    <option value="Ajingi">Ajingi</option>
                                    <option value="Albasu">Albasu</option>
                                    <option value="Bagwai">Bagwai</option>
                                    <option value="Bebeji">Bebeji</option>
                                    <option value="Bichi">Bichi</option>
                                    <option value="Bunkure">Bunkure</option>
                                    <option value="Dala">Dala</option>
                                    <option value="Dambatta">Dambatta</option>
                                    <option value="Dawakin Kudu">Dawakin Kudu</option>
                                    <option value="Dawakin Tofa">Dawakin Tofa</option>
                                    <option value="Doguwa">Doguwa</option>
                                    <option value="Fagge">Fagge</option>
                                    <option value="Gabasawa">Gabasawa</option>
                                    <option value="Garko">Garko</option>
                                    <option value="Garun Mallam">Garun Mallam</option>
                                    <option value="Gaya">Gaya</option>
                                    <option value="Gezawa">Gezawa</option>
                                    <option value="Gwale">Gwale</option>
                                    <option value="Gwarzo">Gwarzo</option>
                                    <option value="Kabo">Kabo</option>
                                    <option value="Kano Municipal">Kano Municipal</option>
                                    <option value="Karaye">Karaye</option>
                                    <option value="Kibiya">Kibiya</option>
                                    <option value="Kiru">Kiru</option>
                                    <option value="Kumbotso">Kumbotso</option>
                                    <option value="Kunchi">Kunchi</option>
                                    <option value="Kura">Kura</option>
                                    <option value="Madobi">Madobi</option>
                                    <option value="Makoda">Makoda</option>
                                    <option value="Minjibir">Minjibir</option>
                                    <option value="Nasarawa">Nasarawa</option>
                                    <option value="Rano">Rano</option>
                                    <option value="Rimin Gado">Rimin Gado</option>
                                    <option value="Rogo">Rogo</option>
                                    <option value="Shanono">Shanono</option>
                                    <option value="Sumaila">Sumaila</option>
                                    <option value="Takai">Takai</option>
                                    <option value="Tarauni">Tarauni</option>
                                    <option value="Tofa">Tofa</option>
                                    <option value="Tsanyawa">Tsanyawa</option>
                                    <option value="Tudun Wada">Tudun Wada</option>
                                    <option value="Ungogo">Ungogo</option>
                                    <option value="Warawa">Warawa</option>
                                    <option value="Wudil">Wudil</option>
                                    <option value="Bakori">Bakori</option>
                                    <option value="Batagarawa">Batagarawa</option>
                                    <option value="Batsari">Batsari</option>
                                    <option value="Baure">Baure</option>
                                    <option value="Bindawa">Bindawa</option>
                                    <option value="Charanchi">Charanchi</option>
                                    <option value="Dan Musa">Dan Musa</option>
                                    <option value="Dandume">Dandume</option>
                                    <option value="Danja">Danja</option>
                                    <option value="Daura">Daura</option>
                                    <option value="Dutsi">Dutsi</option>
                                    <option value="Dutsin Ma">Dutsin Ma</option>
                                    <option value="Faskari">Faskari</option>
                                    <option value="Funtua">Funtua</option>
                                    <option value="Ingawa">Ingawa</option>
                                    <option value="Jibia">Jibia</option>
                                    <option value="Kafur">Kafur</option>
                                    <option value="Kaita">Kaita</option>
                                    <option value="Kankara">Kankara</option>
                                    <option value="Kankia">Kankia</option>
                                    <option value="Katsina">Katsina</option>
                                    <option value="Kurfi">Kurfi</option>
                                    <option value="Kusada">Kusada</option>
                                    <option value="Mai'Adua">Mai'Adua</option>
                                    <option value="Malumfashi">Malumfashi</option>
                                    <option value="Mani">Mani</option>
                                    <option value="Mashi">Mashi</option>
                                    <option value="Matazu">Matazu</option>
                                    <option value="Musawa">Musawa</option>
                                    <option value="Rimi">Rimi</option>
                                    <option value="Sabuwa">Sabuwa</option>
                                    <option value="Safana">Safana</option>
                                    <option value="Sandamu">Sandamu</option>
                                    <option value="Zango">Zango</option>
                                    <option value="Aleiro">Aleiro</option>
                                    <option value="Arewa Dandi">Arewa Dandi</option>
                                    <option value="Argungu">Argungu</option>
                                    <option value="Augie">Augie</option>
                                    <option value="Bagudo">Bagudo</option>
                                    <option value="Birnin Kebbi">Birnin Kebbi</option>
                                    <option value="Bunza">Bunza</option>
                                    <option value="Dandi">Dandi</option>
                                    <option value="Fakai">Fakai</option>
                                    <option value="Gwandu">Gwandu</option>
                                    <option value="Jega">Jega</option>
                                    <option value="Kalgo">Kalgo</option>
                                    <option value="Koko/Besse">Koko/Besse</option>
                                    <option value="Maiyama">Maiyama</option>
                                    <option value="Ngaski">Ngaski</option>
                                    <option value="Sakaba">Sakaba</option>
                                    <option value="Shanga">Shanga</option>
                                    <option value="Suru">Suru</option>
                                    <option value="Wasagu/Danko">Wasagu/Danko</option>
                                    <option value="Yauri">Yauri</option>
                                    <option value="Zuru">Zuru</option>
                                    <option value="Adavi">Adavi</option>
                                    <option value="Ajaokuta">Ajaokuta</option>
                                    <option value="Ankpa">Ankpa</option>
                                    <option value="Bassa">Bassa</option>
                                    <option value="Dekina">Dekina</option>
                                    <option value="Ibaji">Ibaji</option>
                                    <option value="Idah">Idah</option>
                                    <option value="Igalamela Odolu">Igalamela Odolu</option>
                                    <option value="Ijumu">Ijumu</option>
                                    <option value="Kabba/Bunu">Kabba/Bunu</option>
                                    <option value="Kogi">Kogi</option>
                                    <option value="Lokoja">Lokoja</option>
                                    <option value="Mopa Muro">Mopa Muro</option>
                                    <option value="Ofu">Ofu</option>
                                    <option value="Ogori/Magongo">Ogori/Magongo</option>
                                    <option value="Okehi">Okehi</option>
                                    <option value="Okene">Okene</option>
                                    <option value="Olamaboro">Olamaboro</option>
                                    <option value="Omala">Omala</option>
                                    <option value="Yagba East">Yagba East</option>
                                    <option value="Yagba West">Yagba West</option>
                                    <option value="Asa">Asa</option>
                                    <option value="Baruten">Baruten</option>
                                    <option value="Edu">Edu</option>
                                    <option value="Ekiti">Ekiti</option>
                                    <option value="Ifelodun">Ifelodun</option>
                                    <option value="Ilorin East">Ilorin East</option>
                                    <option value="Ilorin South">Ilorin South</option>
                                    <option value="Ilorin West">Ilorin West</option>
                                    <option value="Irepodun">Irepodun</option>
                                    <option value="Isin">Isin</option>
                                    <option value="Kaiama">Kaiama</option>
                                    <option value="Moro">Moro</option>
                                    <option value="Offa">Offa</option>
                                    <option value="Oke Ero">Oke Ero</option>
                                    <option value="Oyun">Oyun</option>
                                    <option value="Pategi">Pategi</option>
                                    <option value="Agege">Agege</option>
                                    <option value="Ajeromi-Ifelodun">Ajeromi-Ifelodun</option>
                                    <option value="Alimosho">Alimosho</option>
                                    <option value="Amuwo-Odofin">Amuwo-Odofin</option>
                                    <option value="Apapa">Apapa</option>
                                    <option value="Badagry">Badagry</option>
                                    <option value="Epe">Epe</option>
                                    <option value="Eti Osa">Eti Osa</option>
                                    <option value="Ibeju-Lekki">Ibeju-Lekki</option>
                                    <option value="Ifako-Ijaiye">Ifako-Ijaiye</option>
                                    <option value="Ikeja">Ikeja</option>
                                    <option value="Ikorodu">Ikorodu</option>
                                    <option value="Kosofe">Kosofe</option>
                                    <option value="Lagos Island">Lagos Island</option>
                                    <option value="Lagos Mainland">Lagos Mainland</option>
                                    <option value="Mushin">Mushin</option>
                                    <option value="Ojo">Ojo</option>
                                    <option value="Oshodi-Isolo">Oshodi-Isolo</option>
                                    <option value="Shomolu">Shomolu</option>
                                    <option value="Surulere">Surulere</option>
                                    <option value="Akwanga">Akwanga</option>
                                    <option value="Awe">Awe</option>
                                    <option value="Doma">Doma</option>
                                    <option value="Karu">Karu</option>
                                    <option value="Keana">Keana</option>
                                    <option value="Keffi">Keffi</option>
                                    <option value="Kokona">Kokona</option>
                                    <option value="Lafia">Lafia</option>
                                    <option value="Nasarawa">Nasarawa</option>
                                    <option value="Nasarawa Egon">Nasarawa Egon</option>
                                    <option value="Obi">Obi</option>
                                    <option value="Toto">Toto</option>
                                    <option value="Wamba">Wamba</option>
                                    <option value="Agaie">Agaie</option>
                                    <option value="Agwara">Agwara</option>
                                    <option value="Bida">Bida</option>
                                    <option value="Borgu">Borgu</option>
                                    <option value="Bosso">Bosso</option>
                                    <option value="Chanchaga">Chanchaga</option>
                                    <option value="Edati">Edati</option>
                                    <option value="Gbako">Gbako</option>
                                    <option value="Gurara">Gurara</option>
                                    <option value="Katcha">Katcha</option>
                                    <option value="Kontagora">Kontagora</option>
                                    <option value="Lapai">Lapai</option>
                                    <option value="Lavun">Lavun</option>
                                    <option value="Magama">Magama</option>
                                    <option value="Mariga">Mariga</option>
                                    <option value="Mashegu">Mashegu</option>
                                    <option value="Mokwa">Mokwa</option>
                                    <option value="Moya">Moya</option>
                                    <option value="Paikoro">Paikoro</option>
                                    <option value="Rafi">Rafi</option>
                                    <option value="Rijau">Rijau</option>
                                    <option value="Shiroro">Shiroro</option>
                                    <option value="Suleja">Suleja</option>
                                    <option value="Tafa">Tafa</option>
                                    <option value="Wushishi">Wushishi</option>
                                    <option value="Abeokuta North">Abeokuta North</option>
                                    <option value="Abeokuta South">Abeokuta South</option>
                                    <option value="Ado-Odo/Ota">Ado-Odo/Ota</option>
                                    <option value="Ewekoro">Ewekoro</option>
                                    <option value="Ifo">Ifo</option>
                                    <option value="Ijebu East">Ijebu East</option>
                                    <option value="Ijebu North">Ijebu North</option>
                                    <option value="Ijebu North East">Ijebu North East</option>
                                    <option value="Ijebu Ode">Ijebu Ode</option>
                                    <option value="Ikenne">Ikenne</option>
                                    <option value="Imeko Afon">Imeko Afon</option>
                                    <option value="Ipokia">Ipokia</option>
                                    <option value="Obafemi Owode">Obafemi Owode</option>
                                    <option value="Odeda">Odeda</option>
                                    <option value="Odogbolu">Odogbolu</option>
                                    <option value="Ogun Waterside">Ogun Waterside</option>
                                    <option value="Remo North">Remo North</option>
                                    <option value="Shagamu">Shagamu</option>
                                    <option value="Yewa North">Yewa North</option>
                                    <option value="Yewa South">Yewa South</option>
                                    <option value="Akoko North-East">Akoko North-East</option>
                                    <option value="Akoko North-West">Akoko North-West</option>
                                    <option value="Akoko South-East">Akoko South-East</option>
                                    <option value="Akoko South-West">Akoko South-West</option>
                                    <option value="Akure North">Akure North</option>
                                    <option value="Akure South">Akure South</option>
                                    <option value="Ese Odo">Ese Odo</option>
                                    <option value="Idanre">Idanre</option>
                                    <option value="Ifedore">Ifedore</option>
                                    <option value="Ilaje">Ilaje</option>
                                    <option value="Ile Oluji/Okeigbo">Ile Oluji/Okeigbo</option>
                                    <option value="Irele">Irele</option>
                                    <option value="Odigbo">Odigbo</option>
                                    <option value="Okitipupa">Okitipupa</option>
                                    <option value="Ondo East">Ondo East</option>
                                    <option value="Ondo West">Ondo West</option>
                                    <option value="Ose">Ose</option>
                                    <option value="Owo">Owo</option>
                                    <option value="Aiyedaade">Aiyedaade</option>
                                    <option value="Aiyedire">Aiyedire</option>
                                    <option value="Atakunmosa East">Atakunmosa East</option>
                                    <option value="Atakunmosa West">Atakunmosa West</option>
                                    <option value="Boluwaduro">Boluwaduro</option>
                                    <option value="Boripe">Boripe</option>
                                    <option value="Ede North">Ede North</option>
                                    <option value="Ede South">Ede South</option>
                                    <option value="Egbedore">Egbedore</option>
                                    <option value="Ejigbo">Ejigbo</option>
                                    <option value="Ife Central">Ife Central</option>
                                    <option value="Ife East">Ife East</option>
                                    <option value="Ife North">Ife North</option>
                                    <option value="Ife South">Ife South</option>
                                    <option value="Ifedayo">Ifedayo</option>
                                    <option value="Ifelodun">Ifelodun</option>
                                    <option value="Ila">Ila</option>
                                    <option value="Ilesa East">Ilesa East</option>
                                    <option value="Ilesa West">Ilesa West</option>
                                    <option value="Irepodun">Irepodun</option>
                                    <option value="Irewole">Irewole</option>
                                    <option value="Isokan">Isokan</option>
                                    <option value="Iwo">Iwo</option>
                                    <option value="Obokun">Obokun</option>
                                    <option value="Odo Otin">Odo Otin</option>
                                    <option value="Ola Oluwa">Ola Oluwa</option>
                                    <option value="Olorunda">Olorunda</option>
                                    <option value="Oriade">Oriade</option>
                                    <option value="Orolu">Orolu</option>
                                    <option value="Osogbo">Osogbo</option>
                                    <option value="Afijio">Afijio</option>
                                    <option value="Akinyele">Akinyele</option>
                                    <option value="Atiba">Atiba</option>
                                    <option value="Atisbo">Atisbo</option>
                                    <option value="Egbeda">Egbeda</option>
                                    <option value="Ibadan North">Ibadan North</option>
                                    <option value="Ibadan North-East">Ibadan North-East</option>
                                    <option value="Ibadan North-West">Ibadan North-West</option>
                                    <option value="Ibadan South-East">Ibadan South-East</option>
                                    <option value="Ibadan South-West">Ibadan South-West</option>
                                    <option value="Ibarapa Central">Ibarapa Central</option>
                                    <option value="Ibarapa East">Ibarapa East</option>
                                    <option value="Ibarapa North">Ibarapa North</option>
                                    <option value="Ido">Ido</option>
                                    <option value="Irepo">Irepo</option>
                                    <option value="Iseyin">Iseyin</option>
                                    <option value="Itesiwaju">Itesiwaju</option>
                                    <option value="Iwajowa">Iwajowa</option>
                                    <option value="Kajola">Kajola</option>
                                    <option value="Lagelu">Lagelu</option>
                                    <option value="Ogbomosho North">Ogbomosho North</option>
                                    <option value="Ogbomosho South">Ogbomosho South</option>
                                    <option value="Ogo Oluwa">Ogo Oluwa</option>
                                    <option value="Olorunsogo">Olorunsogo</option>
                                    <option value="Oluyole">Oluyole</option>
                                    <option value="Ona Ara">Ona Ara</option>
                                    <option value="Orelope">Orelope</option>
                                    <option value="Ori Ire">Ori Ire</option>
                                    <option value="Oyo East">Oyo East</option>
                                    <option value="Oyo West">Oyo West</option>
                                    <option value="Saki East">Saki East</option>
                                    <option value="Saki West">Saki West</option>
                                    <option value="Surulere">Surulere</option>
                                    <option value="Barkin Ladi">Barkin Ladi</option>
                                    <option value="Bassa">Bassa</option>
                                    <option value="Bokkos">Bokkos</option>
                                    <option value="Jos East">Jos East</option>
                                    <option value="Jos North">Jos North</option>
                                    <option value="Jos South">Jos South</option>
                                    <option value="Kanam">Kanam</option>
                                    <option value="Kanke">Kanke</option>
                                    <option value="Langtang North">Langtang North</option>
                                    <option value="Langtang South">Langtang South</option>
                                    <option value="Mangu">Mangu</option>
                                    <option value="Mikang">Mikang</option>
                                    <option value="Pankshin">Pankshin</option>
                                    <option value="Qua'an Pan">Qua'an Pan</option>
                                    <option value="Riyom">Riyom</option>
                                    <option value="Shendam">Shendam</option>
                                    <option value="Wase">Wase</option>
                                    <option value="Abua/Odual">Abua/Odual</option>
                                    <option value="Ahoada East">Ahoada East</option>
                                    <option value="Ahoada West">Ahoada West</option>
                                    <option value="Akuku-Toru">Akuku-Toru</option>
                                    <option value="Andoni">Andoni</option>
                                    <option value="Asari-Toru">Asari-Toru</option>
                                    <option value="Bonny">Bonny</option>
                                    <option value="Degema">Degema</option>
                                    <option value="Eleme">Eleme</option>
                                    <option value="Emuoha">Emuoha</option>
                                    <option value="Etche">Etche</option>
                                    <option value="Gokana">Gokana</option>
                                    <option value="Ikwerre">Ikwerre</option>
                                    <option value="Khana">Khana</option>
                                    <option value="Obio/Akpor">Obio/Akpor</option>
                                    <option value="Ogba/Egbema/Ndoni">Ogba/Egbema/Ndoni</option>
                                    <option value="Ogu/Bolo">Ogu/Bolo</option>
                                    <option value="Okrika">Okrika</option>
                                    <option value="Omuma">Omuma</option>
                                    <option value="Opobo/Nkoro">Opobo/Nkoro</option>
                                    <option value="Oyigbo">Oyigbo</option>
                                    <option value="Port Harcourt">Port Harcourt</option>
                                    <option value="Tai">Tai</option>
                                    <option value="Binji">Binji</option>
                                    <option value="Bodinga">Bodinga</option>
                                    <option value="Dange Shuni">Dange Shuni</option>
                                    <option value="Gada">Gada</option>
                                    <option value="Goronyo">Goronyo</option>
                                    <option value="Gudu">Gudu</option>
                                    <option value="Gwadabawa">Gwadabawa</option>
                                    <option value="Illela">Illela</option>
                                    <option value="Isa">Isa</option>
                                    <option value="Kebbe">Kebbe</option>
                                    <option value="Kware">Kware</option>
                                    <option value="Rabah">Rabah</option>
                                    <option value="Sabon Birni">Sabon Birni</option>
                                    <option value="Shagari">Shagari</option>
                                    <option value="Silame">Silame</option>
                                    <option value="Sokoto North">Sokoto North</option>
                                    <option value="Sokoto South">Sokoto South</option>
                                    <option value="Tambuwal">Tambuwal</option>
                                    <option value="Tangaza">Tangaza</option>
                                    <option value="Tureta">Tureta</option>
                                    <option value="Wamako">Wamako</option>
                                    <option value="Wurno">Wurno</option>
                                    <option value="Yabo">Yabo</option>
                                    <option value="Ardo Kola">Ardo Kola</option>
                                    <option value="Bali">Bali</option>
                                    <option value="Donga">Donga</option>
                                    <option value="Gashaka">Gashaka</option>
                                    <option value="Gassol">Gassol</option>
                                    <option value="Ibi">Ibi</option>
                                    <option value="Jalingo">Jalingo</option>
                                    <option value="Karim Lamido">Karim Lamido</option>
                                    <option value="Kumi">Kumi</option>
                                    <option value="Lau">Lau</option>
                                    <option value="Sardauna">Sardauna</option>
                                    <option value="Takum">Takum</option>
                                    <option value="Ussa">Ussa</option>
                                    <option value="Wukari">Wukari</option>
                                    <option value="Yorro">Yorro</option>
                                    <option value="Zing">Zing</option>
                                    <option value="Bade">Bade</option>
                                    <option value="Bursari">Bursari</option>
                                    <option value="Damaturu">Damaturu</option>
                                    <option value="Fika">Fika</option>
                                    <option value="Fune">Fune</option>
                                    <option value="Geidam">Geidam</option>
                                    <option value="Gujba">Gujba</option>
                                    <option value="Gulani">Gulani</option>
                                    <option value="Jakusko">Jakusko</option>
                                    <option value="Karasuwa">Karasuwa</option>
                                    <option value="Machina">Machina</option>
                                    <option value="Nangere">Nangere</option>
                                    <option value="Nguru">Nguru</option>
                                    <option value="Potiskum">Potiskum</option>
                                    <option value="Tarmuwa">Tarmuwa</option>
                                    <option value="Yunusari">Yunusari</option>
                                    <option value="Yusufari">Yusufari</option>
                                    <option value="Anka">Anka</option>
                                    <option value="Bakura">Bakura</option>
                                    <option value="Birnin Magaji/Kiyaw">Birnin Magaji/Kiyaw</option>
                                    <option value="Bukkuyum">Bukkuyum</option>
                                    <option value="Bungudu">Bungudu</option>
                                    <option value="Chafe">Chafe</option>
                                    <option value="Gummi">Gummi</option>
                                    <option value="Gusau">Gusau</option>
                                    <option value="Kaura Namoda">Kaura Namoda</option>
                                    <option value="Maradun">Maradun</option>
                                    <option value="Maru">Maru</option>
                                    <option value="Shinkafi">Shinkafi</option>
                                    <option value="Talata Mafara">Talata Mafara</option>
                                    <option value="Zurmi">Zurmi</option>

                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label required">Which program are you interested to study 
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select name="program" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Select..." data-allow-clear="true" data-hide-search="true">
                                        <option></option>
                                        <option value="BSc. Entrepreneurship">BSc. Entrepreneurship</option>
                                        <option value="BSc. Accounting">BSc. Accounting</option>
                                        <option value="BSc. Economics">BSc. Economics</option>
                                        <option value="BSc. Public Admin">BSc. Public Admin</option>
                                        <option value="BSc. Banking & Finance">BSc. Banking & Finance</option>
                                        <option value="BSc. Industrial Chemistry">BSc. Industrial Chemistry</option>
                                        <option value="BSc. Biotechnology">BSc. Biotechnology</option>
                                        <option value="BSc. Physics with Electronics">BSc. Physics with Electronics</option>
                                        <option value="BSc. Cyber Security">BSc. Cyber Security</option>
                                        <option value="BSc. Software Engineering">BSc. Software Engineering</option>
                                        <option value="BSc. Computer science">BSc. Computer science</option>
                                        <option value="LLB">LLB</option>
                                    </select>
                                    <!--end::Input-->
                                    @csrf
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 3-->
                        <!--begin::Step 4-->
                        
                        <!--end::Step 4-->
                        <!--begin::Step 5-->
                        <div class="" data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-8 pb-lg-10">
                                    <!--begin::Title-->
                                    <h2 class="fw-bolder text-dark">Your Are Done!</h2>
                                    <!--end::Title-->
                                    <!--begin::Notice-->
                                    <div class="text-gray-400 fw-bold fs-6">Click the submit button below</div>
                                    <!--end::Notice-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Body-->
                                <div class="mb-0">
                                    <!--begin::Text-->
                                    <!--end::Text-->
                                    <!--begin::Alert-->
                                    <!--begin::Notice-->
                                    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/stockholm/Code/Warning-1-circle.svg-->
                                        <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                                <rect fill="#000000" x="11" y="7" width="2" height="8" rx="1" />
                                                <rect fill="#000000" x="11" y="16" width="2" height="2" rx="1" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1">
                                            <!--begin::Content-->
                                            <div class="fw-bold">
                                                <h4 class="text-gray-800 fw-bolder">We need your attention!</h4>
                                                <div class="fs-6 text-gray-600">To start using great tools, please, please
                                                <a href="#" class="fw-bolder">Create Team Platform</a></div>
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Notice-->
                                    <!--end::Alert-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 5-->
                        <!--begin::Actions-->
                        <div class="d-flex flex-stack pt-15">
                            <div class="mr-2">
                                <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                                <!--begin::Svg Icon | path: icons/stockholm/Navigation/Left-2.svg-->
                                <span class="svg-icon svg-icon-4 me-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000)" x="14" y="7" width="2" height="10" rx="1" />
                                            <path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)" />
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->Previous</button>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
                                    <span class="indicator-label">Submit
                                    <!--begin::Svg Icon | path: icons/stockholm/Navigation/Right-2.svg-->
                                    <span class="svg-icon svg-icon-4 ms-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.5" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></span>
                                    <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
                                <!--begin::Svg Icon | path: icons/stockholm/Navigation/Right-2.svg-->
                                <span class="svg-icon svg-icon-4 ms-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <rect fill="#000000" opacity="0.5" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
                                            <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon--></button>
                            </div>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            
            <!--end::Footer-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Authentication - Multi-steps-->
</div>
<!--end::Main-->
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="assets/js/custom/modals/create-account.js"></script>
<script>
    $("#kt_daterangepicker_3").daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format())
    }, function(start, end, label) {
        $('kt_daterangepicker_3').val(start)
        
    }
);
</script>
<!--end::Page Custom Javascript-->
<!--end::Javascript-->


<!--end::Global Javascript Bundle-->
<!--begin::Page Custom Javascript(used by this page)-->
<!--end::Page Custom Javascript-->
<!--end::Javascript-->
@endsection

