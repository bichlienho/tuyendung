@extends('frontend.layout')

@section('content')
  <!-- Main Content -->
  <div class="container mt-4">
    <div class="row">
      <!-- Job Detail -->
      <div class="col-md-12">
        <div class="job-detail-card">
          <!-- Hot Tag -->
          <div class="hot-badge">Hot</div>

          <!-- Header -->
          <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="d-flex align-items-center">
                    <img src="{{asset('public/frontend')}}/img/it1.png" alt="Company Logo" class="rounded me-3" style="width: 50px; height: 50px;">
                    <div>
                            <h3 class="mb-0">Backend Developer (Java Spring)</h3>
                            <p class="text-muted mb-0">VNG Corporation</p>
                    </div>
                </div>
                 <!-- Right side: Match & Heart -->
                <div class="d-flex align-items-center gap-2">
                    <span class="badge bg-success text-white small">92% phù hợp</span>
                    <button class="btn btn-link p-0"><i class="fas fa-heart"></i></button>
                </div>
          </div>

            <!-- Info Row -->
            <div class="d-flex flex-wrap gap-3 mb-3 text-muted small">
                    <span><i class="fas fa-map-marker-alt info-icon"></i> TP. HCM</span>
                    <span class="job-salary"><i class="fas fa-dollar-sign info-icon"></i> 25 - 40 triệu</span>
                    <span><i class="fas fa-clock info-icon"></i> Full-time</span>
                    <span><i class="fas fa-calendar info-icon"></i> 3 ngày trước</span>
                    <span><i class="fas fa-eye info-icon"></i> 189 lượt xem</span>
            </div>

            <!-- Description -->
            <p class="text-muted mb-4">
                Tham gia phát triển các hệ thống backend cho các sản phẩm game và ứng dụng của VNG. Làm việc trong môi trường năng động, sáng tạo và có cơ hội phát triển nghề nghiệp cao.
            </p>

            <!-- Skills Tags -->
            <div class="d-flex flex-wrap gap-2 mb-4">
                    <span class="badge bg-light text-dark border">3+ năm Java Spring Boot</span>
                    <span class="badge bg-light text-dark border">Kinh nghiệm với microservices</span>
                    <span class="badge bg-light text-dark border">Thành thạo MySQL, Redis</span>
            </div>

            <!-- Benefits -->
            <div class="d-flex flex-wrap gap-3 mb-4">
                    <div class="d-flex align-items-center text-muted small">
                            <i class="fas fa-coins me-1"></i> Lương 13-16 tháng
                    </div>
                    <div class="d-flex align-items-center text-muted small">
                            <i class="fas fa-suitcase me-1"></i> Du lịch công ty
                    </div>
                    <div class="d-flex align-items-center text-muted small">
                        <i class="fas fa-calendar-check me-1"></i> Chế độ nghỉ phép linh hoạt
                    </div>
            </div>        

            <hr class="my-4">

            <!-- Chi tiết công việc -->
            <div class="row">
                    <div class="col-md-6">
                        <h5><i class="fas fa-tasks me-2"></i>Mô tả công việc</h5>
                        <ul class="text-muted">
                                <li>Thiết kế và phát triển API RESTful cho các dịch vụ backend</li>
                                <li>Tối ưu hiệu năng hệ thống, đảm bảo khả năng mở rộng</li>
                                <li>Tham gia vào quy trình CI/CD, kiểm thử và triển khai</li>
                                <li>Hợp tác với team frontend và QA để hoàn thiện sản phẩm</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h5><i class="fas fa-clipboard-check me-2"></i>Yêu cầu ứng viên</h5>
                        <ul class="text-muted">
                                <li>3+ năm kinh nghiệm trong phát triển backend với Java/Spring Boot</li>
                                <li>Kinh nghiệm làm việc với Microservices, Docker, Kubernetes</li>
                                <li>Thành thạo SQL (MySQL), NoSQL (Redis, MongoDB)</li>
                                <li>Hiểu biết về Kafka, RabbitMQ hoặc các hệ thống message queue khác</li>
                                <li>Khả năng làm việc độc lập và trong nhóm</li>
                                <li>Tốt nghiệp CNTT hoặc liên quan</li>
                        </ul>
                    </div>
            </div>

            <div class="mt-4">
                    <h5><i class="fas fa-gift me-2"></i>Quyền lợi</h5>
                    <ul class="text-muted">
                        <li>Lương cạnh tranh: 25 - 40 triệu/tháng</li>
                        <li>Phụ cấp ăn trưa, đi lại</li>
                        <li>Đóng BHXH, BHYT đầy đủ</li>
                        <li>Được đào tạo kỹ thuật thường xuyên</li>
                        <li>Được tham gia du lịch công ty hàng năm</li>
                        <li>Chế độ nghỉ phép linh hoạt</li>
                    </ul>
            </div>

            <div class="mt-4">
                    <h5><i class="fas fa-building me-2"></i>Thông tin công ty</h5>
                    <div class="d-flex align-items-start">
                        <img src="{{asset('public/frontend')}}/img/it1.png" alt="VNG Logo" class="rounded me-3" style="width: 60px; height: 60px;">
                        <div>
                                <h6>VNG Corporation</h6>
                                <p class="text-muted small mb-1">Công ty công nghệ hàng đầu Việt Nam, chuyên phát triển game và ứng dụng di động.</p>
                                <p class="text-muted small mb-0"><i class="fas fa-map-marker-alt me-1"></i> Quận 7, TP. HCM</p>
                        </div>
                    </div>
            </div>

            <!-- Nút Ứng tuyển -->
            <div class="mt-5 d-flex justify-content-end">
                    <a href="#" class="btn btn-primary btn-lg">Ứng tuyển ngay</a>
            </div>
        </div>

            <!-- Việc làm liên quan -->
            <div class="similar-jobs">
                <h4><i class="fas fa-sync-alt me-2"></i>Việc làm liên quan</h4>
                <div class="row">
                        <!-- Job Card 1 -->
                        <div class="col-md-6">
                            <div class="job-card-vl">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('public/frontend')}}/img/it2.png" alt="Company Logo" class="rounded me-3" style="width: 40px; height: 40px;">
                                        <div>
                                        <h5 class="mb-0">Frontend Developer (ReactJS)</h5>
                                        <p class="text-muted mb-0">FPT Software</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge bg-success text-white small">90% phù hợp</span>
                                        <button class="btn btn-link p-0"><i class="fas fa-heart"></i></button>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap gap-2 mb-2 text-muted small">
                                    <span><i class="fas fa-map-marker-alt"></i> Hà Nội</span>
                                    <span><i class="fas fa-dollar-sign"></i> 20 - 35 triệu</span>
                                    <span><i class="fas fa-clock"></i> Full-time</span>
                                    <span><i class="fas fa-calendar"></i> 2 ngày trước</span>
                                </div>
                                <p class="text-muted small mb-3">Phát triển giao diện người dùng cho các sản phẩm web và mobile...</p>
                                <div class="d-flex flex-wrap gap-2 mb-3">
                                    <span class="badge bg-light text-dark border">ReactJS</span>
                                    <span class="badge bg-light text-dark border">Redux</span>
                                    <span class="badge bg-light text-dark border">3+ năm kinh nghiệm</span>
                                </div>
                                <div class="d-flex flex-wrap gap-3 mb-3">
                                    <div class="d-flex align-items-center text-muted small">
                                        <i class="fas fa-coins me-1"></i> Lương 14 tháng
                                    </div>
                                    <div class="d-flex align-items-center text-muted small">
                                        <i class="fas fa-suitcase me-1"></i> Team building
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="{{route('chitietvieclam')}}" class="btn btn-outline-primary btn-sm">Xem chi tiết</a>
                                    <a href="#" class="btn btn-primary btn-sm">Ứng tuyển ngay</a>
                                </div>
                                <div class="position-absolute top-0 end-0 mt-2 me-2">
                                    <span class="badge bg-danger text-white rounded-pill">Hot</span>
                                </div>
                            </div>
                        </div>

                        <!-- Job Card 2 -->
                        <div class="col-md-6">
                                <div class="job-card-vl">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <div class="d-flex align-items-center">
                                                <img src="{{asset('public/frontend')}}/img/it1.png" alt="Company Logo" class="rounded me-3" style="width: 40px; height: 40px;">
                                                <div>
                                                    <h5 class="mb-0">DevOps Engineer</h5>
                                                    <p class="text-muted mb-0">Zalo Group</p>
                                                </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2">
                                                <span class="badge bg-success text-white small">85% phù hợp</span>
                                                <button class="btn btn-link p-0"><i class="fas fa-heart"></i></button>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap gap-2 mb-2 text-muted small">
                                        <span><i class="fas fa-map-marker-alt"></i> TP. HCM</span>
                                        <span><i class="fas fa-dollar-sign"></i> 30 - 45 triệu</span>
                                        <span><i class="fas fa-clock"></i> Full-time</span>
                                        <span><i class="fas fa-calendar"></i> 1 ngày trước</span>
                                    </div>
                                    <p class="text-muted small mb-3">Xây dựng và vận hành hệ thống CI/CD, đảm bảo hệ thống luôn ổn định...</p>
                                    <div class="d-flex flex-wrap gap-2 mb-3">
                                        <span class="badge bg-light text-dark border">Docker</span>
                                        <span class="badge bg-light text-dark border">Kubernetes</span>
                                        <span class="badge bg-light text-dark border">AWS</span>
                                    </div>
                                    <div class="d-flex flex-wrap gap-3 mb-3">
                                        <div class="d-flex align-items-center text-muted small">
                                            <i class="fas fa-coins me-1"></i> Lương 15 tháng
                                        </div>
                                        <div class="d-flex align-items-center text-muted small">
                                            <i class="fas fa-medal me-1"></i> Thưởng hiệu suất
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end gap-2">
                                        <a href="{{route('chitietvieclam')}}" class="btn btn-outline-primary btn-sm">Xem chi tiết</a>
                                        <a href="#" class="btn btn-primary btn-sm">Ứng tuyển ngay</a>
                                    </div>
                                    <div class="position-absolute top-0 end-0 mt-2 me-2">
                                        <span class="badge bg-warning text-white rounded-pill">Mới</span>
                                    </div>
                                </div>
                        </div>
                </div>
            </div>
      </div>
    </div>
  </div>

@endsection