@extends('frontend.layout')
@section('content')

<!-- Hero Section (Banner Slide) -->
<section class="bg-primary text-white py-5">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 text-center">
                <h1 class="display-4 fw-bold">Tìm việc làm phù hợp với bạn</h1>
                <p class="lead mb-4">Khám phá hàng nghìn cơ hội nghề nghiệp từ các công ty hàng đầu Việt Nam</p>

                <!-- Search Form -->
                <form class="d-flex flex-column flex-md-row gap-2 mb-4">
                    <input type="text" class="form-control" placeholder="Vị trí, công ty, từ khóa...">
                    <input type="text" class="form-control" placeholder="Tất cả địa điểm">
                    <button class="btn btn-light btn-lg">Tìm kiếm</button>
                </form>

                <!-- Tags / Skills -->
                <div class="d-flex flex-wrap justify-content-center gap-2">
                    @foreach(['ReactJS', 'NodeJS', 'Marketing', 'Sales', 'Designer', 'Python', 'Java', 'Business Analyst'] as $tag)
                        <a href="#" class="btn btn-outline-light btn-sm rounded-pill px-3 py-1">{{ $tag }}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <img src="{{asset('public/frontend')}}/img/banner1.png" alt="IT Job" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<!-- Hot Jobs for Interns & Fresh Graduates -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Việc làm HOT dành cho sinh viên & thực tập sinh</h2>
        <div class="row g-4">
            <!-- Job Card 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="job-card card h-20 shadow-sm border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <img src="{{asset('public/frontend')}}/img/it1.png" alt="Company" class="rounded-circle me-2">
                            <h5 class="mb-0">Lập trình viên PHP</h5>
                        </div>
                        <p class="text-muted small">FPT Software</p>
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <span class="badge bg-danger">HOT</span>
                            <span class="text-muted small">Hà Nội</span>
                        </div>
                        <div class="mt-2">
                            <small class="text-muted">20 - 25 triệu</small><br>
                            <small class="text-muted">Full-time</small>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-3">Ứng tuyển</a>
                    </div>
                </div>
            </div>

            <!-- Job Card 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="job-card card h-20 shadow-sm border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <img src="{{asset('public/frontend')}}/img/it2.png" alt="Company" class="rounded-circle me-2">
                            <h5 class="mb-0">DevOps Engineer</h5>
                        </div>
                        <p class="text-muted small">Grab Vietnam</p>
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <span class="badge bg-warning">Urgent</span>
                            <span class="text-muted small">TP.HCM</span>
                        </div>
                        <div class="mt-2">
                            <small class="text-muted">30 - 50 triệu</small><br>
                            <small class="text-muted">Full-time</small>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-3">Ứng tuyển</a>
                    </div>
                </div>
            </div>

            <!-- Job Card 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="job-card card h-20 shadow-sm border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <img src="{{asset('public/frontend')}}/img/it3.jpg" alt="Company" class="rounded-circle me-2">
                            <h5 class="mb-0">Business Analyst</h5>
                        </div>
                        <p class="text-muted small">Meta Corporation</p>
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <span class="badge bg-danger">HOT</span>
                            <span class="text-muted small">Hà Nội</span>
                        </div>
                        <div class="mt-2">
                            <small class="text-muted">18 - 30 triệu</small><br>
                            <small class="text-muted">Full-time</small>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-3">Ứng tuyển</a>
                    </div>
                </div>
            </div>

            <!-- Job Card 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="job-card card h-20 shadow-sm border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <img src="{{asset('public/frontend')}}/img/it4.png" alt="Company" class="rounded-circle me-2">
                            <h5 class="mb-0">UI/UX Designer</h5>
                        </div>
                        <p class="text-muted small">TikTok</p>
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <span class="badge bg-warning">Urgent</span>
                            <span class="text-muted small">Hà Nội</span>
                        </div>
                        <div class="mt-2">
                            <small class="text-muted">20 - 25 triệu</small><br>
                            <small class="text-muted">Full-time</small>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-3">Ứng tuyển</a>
                    </div>
                </div>
            </div>

            <!-- Job Card 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="job-card card h-20 shadow-sm border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <img src="{{asset('public/frontend')}}/img/it5.png" alt="Company" class="rounded-circle me-2">
                            <h5 class="mb-0">Frontend Developer</h5>
                        </div>
                        <p class="text-muted small">VNG Corp</p>
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <span class="badge bg-danger">HOT</span>
                            <span class="text-muted small">TP.HCM</span>
                        </div>
                        <div class="mt-2">
                            <small class="text-muted">25 - 35 triệu</small><br>
                            <small class="text-muted">Full-time</small>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-3">Ứng tuyển</a>
                    </div>
                </div>
            </div>

            <!-- Job Card 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="job-card card h-20 shadow-sm border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <img src="{{asset('public/frontend')}}/img/it1.png" alt="Company" class="rounded-circle me-2">
                            <h5 class="mb-0">Data Analyst</h5>
                        </div>
                        <p class="text-muted small">Shopee Vietnam</p>
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <span class="badge bg-warning">Urgent</span>
                            <span class="text-muted small">Hà Nội</span>
                        </div>
                        <div class="mt-2">
                            <small class="text-muted">20 - 30 triệu</small><br>
                            <small class="text-muted">Full-time</small>
                        </div>
                        <a href="#" class="btn btn-primary w-100 mt-3">Ứng tuyển</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('job') }}" class="btn btn-primary px-5">Xem tất cả việc làm</a>
        </div>
    </div>
</section>

<!-- Popular Companies -->
<section class="py-5 bg-white">
    <div class="container">
        <h2 class="text-center mb-4">Các công ty nổi bật</h2>
        <div class="row g-4">
            @foreach(['FPT Software', 'Grab Vietnam', 'Meta Corporation', 'TikTok', 'VNG Corp', 'Shopee Vietnam'] as $company)
                <div class="col-md-4">
                    <div class="card text-center border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="mb-2">{{ $company }}</h5>
                            <p class="text-muted small">500 - 1.000+ nhân viên</p>
                            <p class="text-muted small">25 việc làm</p>
                            <a href="{{route('chitietcongty')}}" class="btn btn-outline-primary btn-sm">Xem công ty</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-outline-primary px-5">Xem tất cả công ty</a>
        </div>
    </div>
</section>

@endsection