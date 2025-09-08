@extends('frontend/layout')
@section('content')

  <div class="container">
    <div class="register-card mx-auto">
        <!-- Header -->
        <div class="register-header">
                <h2><i class="fas fa-user-plus me-2"></i>Đăng ký tài khoản</h2>
                <p class="mb-0">Tạo tài khoản để tìm việc và ứng tuyển nhanh chóng</p>
        </div>

      <!-- Body -->
      <div class="register-body">
             <!-- Form -->
            <form>
            <div class="mb-3">
                <label for="fullname" class="form-label">Họ và tên <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="fullname" placeholder="Nhập họ và tên của bạn" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="email" placeholder="example@email.com" required>
            </div>

            <div class="mb-3 position-relative">
                <label for="password" class="form-label">Mật khẩu <span class="text-danger">*</span></label>
                <input type="password" class="form-control" id="password" placeholder="Tối thiểu 6 ký tự" required>
                <i class="fas fa-eye eye-icon" id="togglePassword"></i>
            </div>

            <div class="mb-3 position-relative">
                <label for="confirmPassword" class="form-label">Xác nhận mật khẩu <span class="text-danger">*</span></label>
                <input type="password" class="form-control" id="confirmPassword" placeholder="Nhập lại mật khẩu" required>
                <i class="fas fa-eye eye-icon" id="toggleConfirmPassword"></i>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Số điện thoại (tùy chọn)</label>
                <input type="tel" class="form-control" id="phone" placeholder="09xx xxx xxx">
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="terms" required>
                <label class="form-check-label" for="terms">
                Tôi đồng ý với <a href="#" target="_blank">Điều khoản sử dụng</a> và <a href="#" target="_blank">Chính sách bảo mật</a>
                </label>
            </div>

            <button type="submit" class="btn btn-primary w-100 mb-3">Đăng ký ngay</button>

            <p class="terms text-center">
                Bằng cách đăng ký, bạn đồng ý nhận email từ chúng tôi. Bạn có thể hủy đăng ký bất kỳ lúc nào.
            </p>

            <div class="login-link">
                Đã có tài khoản? <a href="{{route('dangnhap')}}">Đăng nhập ngay</a>
            </div>
            </form>
      </div>
    </div>
  </div>

  <script>
    // Toggle password visibility
    document.getElementById('togglePassword').addEventListener('click', function () {
      const passwordInput = document.getElementById('password');
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);
      this.classList.toggle('fa-eye');
      this.classList.toggle('fa-eye-slash');
    });

    document.getElementById('toggleConfirmPassword').addEventListener('click', function () {
      const passwordInput = document.getElementById('confirmPassword');
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);
      this.classList.toggle('fa-eye');
      this.classList.toggle('fa-eye-slash');
    });
  </script>

@endsection