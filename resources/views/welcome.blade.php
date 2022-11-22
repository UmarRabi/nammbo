<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Fonts -->

</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="row">
                        @foreach ($positions as $key => $position)
                            <div class="card col-md-4">
                                <div class="card-header">
                                    {{ $position->title }}
                                    <input type="hidden" name="position_code[]" value="{{ $position->code }}">
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="" class="control-label col-4">Name</label>
                                            <input type="text" name="name[]" class="col-8 form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="" class="control-label col-4">VIN</label>
                                            <input type="text" name="vin[]" class="form-control col-8">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="" class="control-label col-4">Email</label>
                                            <input type="email" name="email[]" class="form-control col-8">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="" class="control-label col-4">Telephone</label>
                                            <input type="tel" name="phone[]" class="form-control col-8">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="" class="control-label col-4">Age</label>
                                            <input type="number" name="age[]" class="form-control col-8">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="" class="control-label col-4">Exco</label>
                                            <input type="hidden" name="exco[]" id="excos{{ $key }}"
                                                value="0" class="form-control col-4">
                                            <input type="checkbox" data-target="excos{{ $key }}"
                                                class="excoscheck" id="excoscheck" value="1"
                                                class="form-control col-4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        {{-- <div class="card col-md-4">
                            <div class="card-header">
                                Deputy State Chairman
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="" class="control-label col-4">Name</label>
                                        <input type="text" name="name[]" class="col-8 form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="" class="control-label col-4">VIN</label>
                                        <input type="text" name="vin[]" class="form-control col-8">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="" class="control-label col-4">Email</label>
                                        <input type="email" name="email[]" class="form-control col-8">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="" class="control-label col-4">Telephone</label>
                                        <input type="tel" name="phone[]" class="form-control col-8">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="" class="control-label col-4">Age</label>
                                        <input type="number" name="age[]" class="form-control col-8">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="" class="control-label col-4">Exco</label>
                                        <input type="hidden" name="exco[]" id="exco3" value="0"
                                            class="form-control col-4">
                                        <input type="checkbox" name="exco[]" id="exco3" value="1"
                                            class="form-control col-4">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-md-4">
                            <div class="card-header">
                                State vice Chairman (North)
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="" class="control-label col-4">Name</label>
                                        <input type="text" name="name[]" class="col-8 form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="" class="control-label col-4">VIN</label>
                                        <input type="text" name="vin[]" class="form-control col-8">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="" class="control-label col-4">Email</label>
                                        <input type="email" name="email[]" class="form-control col-8">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="" class="control-label col-4">Telephone</label>
                                        <input type="tel" name="phone[]" class="form-control col-8">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="" class="control-label col-4">Age</label>
                                        <input type="number" name="age[]" class="form-control col-8">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="" class="control-label col-4">Exco</label>
                                        <input type="hidden" name="exco[]" id="exco3" value="0"
                                            class="form-control col-4">
                                        <input type="checkbox" name="exco[]" id="exco3" value="1"
                                            class="form-control col-4">
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>
<script>
    document.onreadystatechange = function() {

        if (document.readyState == 'complete') {
            document.querySelectorAll('.excoscheck').forEach(element => {
                element.addEventListener('change', function() {
                    alert(this.getAttribute('data-target'))
                    if (this.checked) {
                        document.getElementById(this.getAttribute('data-target')).value = 1
                    } else {
                        document.getElementById(this.data - target).value = 0
                    }
                })
            });

        }
    }
</script>
