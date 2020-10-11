<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap-4.5.2-dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="jquery.min.js"></script>
    <script src="bootstrap-4.5.2-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <title>Mengubah profil penulis</title>
    <style>
        body {
            background: #BA68C8
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8
        }

        .profile-button {
            background: #BA68C8;
            box-shadow: none;
            border: none
        }

        .profile-button:hover {
            background: #682773
        }

        .profile-button:focus {
            background: #682773;
            box-shadow: none
        }

        .profile-button:active {
            background: #682773;
            box-shadow: none
        }

        .back:hover {
            color: #682773;
            cursor: pointer
        } 
    </style>
</head>
<body>
    <div class="container rounded bg-white mt-5">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <div class="col-12 col-sm-auto mb-3">
                        <div class="mx-auto" style="width: 140px;">
                            <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                                <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                            </div>
                        </div>
                    </div>
                    <span class="font-weight-bold">Setiyoningsih</span>
                    <span class="text-black-50">Setiyoningsih0@gmail.com</span>
                    <span>Indonesia</span>
                    <button class="btn btn-primary" type="button">
                        <i class="fa fa-fw fa-camera"></i>
                        <span>Change Photo</span>
                    </button>
            </div>    
        </div>

        <div class="col-md-8">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                        <h6>Back to home</h6>
                    </div>
                    <h6 class="text-right">Edit Profile</h6>
                </div>
                <form method="post" action="{{ url('/penulis/editprofile') }}">
                    <div class="row mt-2">
                        <div class="col-md-6"><input type="text" class="form-control" name="nama" placeholder="Full name" value="{{ $penulis->nama }}"></div>
                        <div class="col-md-6"><input type="text" class="form-control" name="notelp" placeholder="Phone number" value="{{ $penulis->no_telp }}"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><input type="text" class="form-control" name="email" placeholder="Email" value="{{ $penulis->email }}"></div>
                        <div class="col-md-6"><input type="text" class="form-control" name="password" placeholder="Password" value="{{ $penulis->password }}"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><input type="text" class="form-control" name="alamat" placeholder="Address" value="{{ $penulis->alamat }}"></div>
                        <div class="col-md-6"><input type="text" class="form-control" name="kota" placeholder="City" value="{{ $penulis->kota }}"></div>
                    </div>
                    <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>