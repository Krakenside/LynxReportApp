@extends('layouts.admin')

@section('title', 'Voir infos Client')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>infos client</h1>
        </div>
    </div>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Infos client</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->

        <div class="card-body">
            <div class="form-group">
                <label for="designation_clt">Désignation</label>
                <input class="form-control form-control-lg" id="designation_clt" type="text" placeholder="Désignation"
                    aria-label=".form-control-lg example" name="designation" maxlength="30"
                    value="{{ $client->designation }}" readonly>
                <div class="form-group">
                    <label>Type Client</label>
                    <select class="form-control" name="type" id="type_clt" disabled>

                        <option value="Entreprise" @if($client->type == 'Entreprise') selected @endif> Entreprise
                        </option>
                        <option value="Particulier" @if($client->type == 'Particulier') selected @endif>Particulier
                        </option>
                        <option value="Organisation" @if($client->type == 'Organisation') selected
                            @endif>Organisation</option>

                        {{-- @endif> Entreprise</option>
                        <option value="Particulier">Particulier</option>
                        <option value="Organisation">Organisation</option> --}}
                    </select>
                </div>
                <label for="adr_clt">Adresse client</label>
                <input class="form-control form-control-lg" id="adr_clt" type="text" placeholder="Adresse géographique"
                    aria-label=".form-control-lg example" name="adresse" max="255" value="{{$client->adresse}}"
                    readonly>

                <label for="tel_clt">Telephone</label>
                <input class="form-control form-control-lg" id="tel_clt" type="tel" placeholder="N° Telephone"
                    aria-label=".form-control-lg example" name="telephone" maxlength="20" value="{{$client->telephone}}"
                    readonly>

                <label for="mail_clt">Adresse email </label>
                <input type="email" class="form-control" id="mail_clt" placeholder="Enter email" name="adr_mail"
                    value="{{$client->adr_mail}}" readonly>
            </div>
        </div>
        <!-- /.card-body -->



    </div>
    <!-- /.card -->

    {{-- <div class="card card-warning card-outline mb-4">
        <!--begin::Header-->
        <div class="card-header">
            <div class="card-title">Horizontal Form</div>
        </div>
        <!--end::Header-->
        <!--begin::Form-->
        <form>
            <!--begin::Body-->
            <div class="card-body">
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" />
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                value="option1" checked />
                            <label class="form-check-label" for="gridRadios1"> First radio </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                value="option2" />
                            <label class="form-check-label" for="gridRadios2"> Second radio </label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3"
                                value="option3" disabled />
                            <label class="form-check-label" for="gridRadios3">
                                Third disabled radio
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="row mb-3">
                    <div class="col-sm-10 offset-sm-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1" />
                            <label class="form-check-label" for="gridCheck1">
                                Example checkbox
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Body-->
            <!--begin::Footer-->
            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Sign in</button>
                <button type="submit" class="btn float-end">Cancel</button>
            </div>
            <!--end::Footer-->
        </form>
        <!--end::Form-->
    </div> --}}
    <!--end::Horizontal Form-->
</div>
@endsection
