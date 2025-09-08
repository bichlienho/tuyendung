@extends('frontend.layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 p-0 bg-white border-end">
            <div class="p-3 border-bottom">
                <h5 class="mb-0">VIỆC LÀM</h5>
            </div>
            <ul class="list-unstyled">
                <li><a href="#" class="d-flex align-items-center px-3 py-2 text-decoration-none text-dark border-bottom">
                    <i class="fas fa-search me-2"></i> Tìm việc làm
                </a></li>
                <li><a href="#" class="d-flex align-items-center px-3 py-2 text-decoration-none text-dark border-bottom">
                    <i class="fas fa-bookmark me-2"></i> Việc làm đã lưu
                </a></li>
                <li><a href="#" class="d-flex align-items-center px-3 py-2 text-decoration-none text-dark border-bottom">
                    <i class="fas fa-file-alt me-2"></i> Việc làm đã ứng tuyển
                </a></li>
                <li><a href="#" class="d-flex align-items-center px-3 py-2 text-decoration-none text-dark border-bottom">
                    <i class="fas fa-thumbs-up me-2"></i> Việc làm phù hợp
                </a></li>
            </ul>

            <div class="p-3 border-bottom mt-3">
                <h5 class="mb-0">CÔNG TY</h5>
            </div>
            <ul class="list-unstyled">
                <li><a href="#" class="d-flex align-items-center px-3 py-2 text-decoration-none text-dark border-bottom">
                    <i class="fas fa-building me-2"></i> Danh sách công ty
                </a></li>
                <li><a href="#" class="d-flex align-items-center px-3 py-2 text-decoration-none text-dark">
                    <i class="fas fa-star me-2"></i> Top công ty
                </a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="col-md-9">
            <div class="bg-white shadow-sm rounded p-4 mb-4">
                <h4 class="mb-4">Việc làm phù hợp với bạn</h4>
                <form class="d-flex gap-2 mb-4">
                    <input type="text" class="form-control" placeholder="Vị trí, công ty, từ khóa...">
                    <input type="text" class="form-control" placeholder="Địa điểm">
                    <button class="btn btn-primary">Tìm kiếm</button>
                </form>

                <!-- Job List -->
                <div class="row g-3">
                  
                      <div class="job-card-vl">
                            <!-- Header -->
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('public/frontend')}}/img/it1.png" alt="Company Logo" class="rounded me-3" style="width: 40px; height: 40px;">
                                    <div>
                                        <h5 class="mb-0">Backend Developer (Java Spring)</h5>
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
                            <div class="d-flex flex-wrap gap-2 mb-2 text-muted small">
                                <span><i class="fas fa-map-marker-alt"></i> TP. HCM</span>
                                <span><i class="fas fa-dollar-sign"></i> 25 - 40 triệu</span>
                                <span><i class="fas fa-clock"></i> Full-time</span>
                                <span><i class="fas fa-calendar"></i> 3 ngày trước</span>
                                <span><i class="fas fa-eye"></i> 189 lượt xem</span>
                            </div>

                            <!-- Description -->
                            <p class="text-muted small mb-3">
                                Tham gia phát triển các hệ thống backend cho các sản phẩm game và ứng dụng của VNG...
                            </p>

                            <!-- Skills Tags -->
                            <div class="d-flex flex-wrap gap-2 mb-3">
                                <span class="badge bg-light text-dark border">3+ năm Java Spring Boot</span>
                                <span class="badge bg-light text-dark border">Kinh nghiệm với microservices</span>
                                <span class="badge bg-light text-dark border">Thành thạo MySQL, Redis</span>
                            </div>

                            <!-- Benefits -->
                            <div class="d-flex flex-wrap gap-3 mb-3">
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

                            <!-- Buttons -->
                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{route('chitietvieclam')}}" class="btn btn-outline-primary btn-sm">Xem chi tiết</a>
                                <a href="#" class="btn btn-primary btn-sm">Ứng tuyển ngay</a>
                            </div>

                            <!-- Hot Tag -->
                            <div class="position-absolute top-0 end-0 mt-2 me-2">
                                <span class="badge bg-danger text-white rounded-pill">Hot</span>
                            </div>
                        </div>

                        <div class="job-card-vl">
                            <!-- Header -->
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('public/frontend')}}/img/it1.png" alt="Company Logo" class="rounded me-3" style="width: 40px; height: 40px;">
                                    <div>
                                        <h5 class="mb-0">Backend Developer (Java Spring)</h5>
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
                            <div class="d-flex flex-wrap gap-2 mb-2 text-muted small">
                                <span><i class="fas fa-map-marker-alt"></i> TP. HCM</span>
                                <span><i class="fas fa-dollar-sign"></i> 25 - 40 triệu</span>
                                <span><i class="fas fa-clock"></i> Full-time</span>
                                <span><i class="fas fa-calendar"></i> 3 ngày trước</span>
                                <span><i class="fas fa-eye"></i> 189 lượt xem</span>
                            </div>

                            <!-- Description -->
                            <p class="text-muted small mb-3">
                                Tham gia phát triển các hệ thống backend cho các sản phẩm game và ứng dụng của VNG...
                            </p>

                            <!-- Skills Tags -->
                            <div class="d-flex flex-wrap gap-2 mb-3">
                                <span class="badge bg-light text-dark border">3+ năm Java Spring Boot</span>
                                <span class="badge bg-light text-dark border">Kinh nghiệm với microservices</span>
                                <span class="badge bg-light text-dark border">Thành thạo MySQL, Redis</span>
                            </div>

                            <!-- Benefits -->
                            <div class="d-flex flex-wrap gap-3 mb-3">
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

                            <!-- Buttons -->
                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{route('chitietvieclam')}}" class="btn btn-outline-primary btn-sm">Xem chi tiết</a>
                                <a href="#" class="btn btn-primary btn-sm">Ứng tuyển ngay</a>
                            </div>

                            <!-- Hot Tag -->
                            <div class="position-absolute top-0 end-0 mt-2 me-2">
                                <span class="badge bg-danger text-white rounded-pill">Hot</span>
                            </div>
                        </div>
                  
                
                    </div>

                <!-- Pagination -->
                <nav class="mt-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#">Trước</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Sau</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection