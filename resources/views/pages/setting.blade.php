<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/setting.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    {{-- Header --}}
    @include('component.header')

    <div class="container light-style flex-grow-1 container-p-y main-section">
        <h4 class="font-weight-bold py-3 mb-4 ">
            Account settings
        </h4>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light mb-20 sub-section">
                {{-- Side bar --}}
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">Thông tin người dùng</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-change-password">Đổi mật khẩu</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Địa
                            chỉ nhận hàng</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-notifications">Thông báo</a>
                    </div>
                </div>
                {{-- main section --}}
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <div class="card-body media align-items-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt
                                    class="d-block ui-w-80 ">
                                <div class="media-body ml-4">
                                    <label class="btn btn-outline-primary">
                                        Thêm ảnh mới
                                        <input type="file" class="account-settings-fileinput">
                                    </label> &nbsp;
                                    <button type="button" class="btn btn-default md-btn-flat">Làm mới</button>
                                    <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Tên đăng nhập</label>
                                    <input type="text" class="form-control mb-1" value="{{ Auth::user()->user_name}}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" class="form-control mb-1" value="{{ Auth::user()->email}}">
                                    {{-- <div class="alert alert-warning mt-3">
                                        Your email is not confirmed. Please check your inbox.<br>
                                        <a href="javascript:void(0)">Resend confirmation</a>
                                    </div> --}}
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Quốc gia</label>
                                    <input type="text" class="form-control" value="Việt Nam">
                                </div>
                            </div>
                        </div>
                        {{-- Đổi mật khẩu --}}
                        <div class="tab-pane fade" id="account-change-password">
                            <div class="card-body pb-2">
                                <form action="{{ route('auth.changepass') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label">Mật khẩu hiện tại</label>
                                        <input type="password" name="password" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Mật khẩu mới</label>
                                        <input type="password" name="new_password" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Nhập lại mật khẩu mới</label>
                                        <input type="password" name="new_password_confirmation" class="form-control" required>
                                    </div>
                                    <div class="text-right mt-3">
                                        <button type="submit" class="btn btn-primary">Save changes</button>&nbsp;
                                    </div>
                                </form>                                
                            </div>
                        </div>
                        {{-- Địa chỉ nhận hàng --}}
                        <div class="tab-pane fade" id="account-info">
                            <div class="card-body pb-2">
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <label class="form-label">Bio</label>
                                        <textarea class="form-control"
                                            rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nunc arcu, dignissim sit amet sollicitudin iaculis, vehicula id urna. Sed luctus urna nunc. Donec fermentum, magna sit amet rutrum pretium, turpis dolor molestie diam, ut lacinia diam risus eleifend sapien. Curabitur ac nibh nulla. Maecenas nec augue placerat, viverra tellus non, pulvinar risus.</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Birthday</label>
                                        <input type="text" class="form-control" value="May 3, 1995">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Country</label>
                                        <select class="custom-select">
                                            <option>USA</option>
                                            <option selected>Canada</option>
                                            <option>UK</option>
                                            <option>Germany</option>
                                            <option>France</option>
                                        </select>
                                    </div>
                                    <div class="text-right mt-3">
                                        <button type="submit" class="btn btn-primary">Save changes</button>&nbsp;
                                    </div>
                                </form>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Contacts</h6>
                                <div class="form-group">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control" value="+0 (123) 456 7891">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Website</label>
                                    <input type="text" class="form-control" value>
                                </div>
                            </div>
                        </div>
                        {{-- Thông báo --}}
                        <div class="tab-pane fade" id="account-notifications">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Activity</h6>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Email me when someone comments on my article</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Email me when someone answers on my forum
                                            thread</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input">
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Email me when someone follows me</span>
                                    </label>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Application</h6>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">News and announcements</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input">
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Weekly product updates</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" checked>
                                        <span class="switcher-indicator">
                                            <span class="switcher-yes"></span>
                                            <span class="switcher-no"></span>
                                        </span>
                                        <span class="switcher-label">Weekly blog digest</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="" id="alert"
        style="position: absolute; top: 300px; right: 20px; text-align:start; font-size: 13px">
        <ul style="list-style-type: none; padding: 0;">
            @if (session('success'))
                <li style="color: #fff; margin: 5px 0; background-color: #ae3c33;border-radius:20px; padding: 10px 10px">
                    {{ session('success') }}
                </li>
                <script>
                    setTimeout(function () {
                        var alertDiv = document.getElementById('alert');
                        if (alertDiv) {
                            alertDiv.style.display = 'none';
                        }
                    }, 3000); // 3s
                </script>
            @endif

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <li style="color: #fff; margin: 5px 0; background-color: #ae3c33;border-radius:20px; padding: 10px 10px">
                        {{ $error }} <i class="fa-solid fa-circle-exclamation"></i>
                    </li>
                    <script>
                        setTimeout(function () {
                            var alertDiv = document.getElementById('alert');
                            if (alertDiv) {
                                alertDiv.style.display = 'none';
                            }
                        }, 3000); // 3s
                    </script>
                @endforeach
            @endif
        </ul>
    </div>

    

    @include('component.footer')


    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html>