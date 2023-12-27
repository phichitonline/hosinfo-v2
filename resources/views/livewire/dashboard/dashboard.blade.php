<div> {{-- สำคัญสำหรับ wire: <div> ห้ามเอาออก  --}}

@section('pagetitle', 'Dashboard')

@section('activemenu_dashboard', 'mm-active')
@section('activemenu_dashboard_home', 'mm-active')

{{-- @section('content') --}}

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-ambulance icon-gradient bg-malibu-beach"></i>
            </div>
            <div>
                <h3>@yield('pagetitle')</h3>
                <div class="page-title-subheading">ระบบสารสนเทศเพื่อการจัดการข้อมูลโรงพยาบาล</div>
            </div>
        </div>
        <div class="page-title-actions">
            <button type="button" data-bs-toggle="tooltip" title="Dashboard"
                data-bs-placement="bottom" class="btn-shadow me-3 btn btn-dark">
                <i class="fa fa-star"></i>
            </button>
            <div class="d-inline-block dropdown">
                <button type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                    <span class="btn-icon-wrapper pe-2 opacity-7">
                        <i class="fa fa-business-time fa-w-20"></i>
                    </span>
                    Buttons
                </button>
                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="nav-link-icon lnr-inbox"></i>
                                <span> Inbox</span>
                                <div class="ms-auto badge rounded-pill bg-secondary">86</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="nav-link-icon lnr-book"></i>
                                <span> Book</span>
                                <div class="ms-auto badge rounded-pill bg-danger">5</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="nav-link-icon lnr-picture"></i>
                                <span> Picture</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a disabled class="nav-link disabled">
                                <i class="nav-link-icon lnr-file-empty"></i>
                                <span> File Disabled</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- สรุปผู้ป่วยนอก --}}
<div class="row">
    <div class="col-md-4">
        <a href="{{ route('stat.opd') }}" data-bs-toggle="tooltip" title="ข้อมูลผู้ป่วยนอก">
        <div class="card mb-3 widget-chart widget-chart2 bg-plum-plate text-start">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content text-white">
                    <div class="widget-chart-flex">
                        <div class="widget-title">ผู้ป่วยนอกวันนี้</div>
                        <div class="widget-subtitle text-white opacity-7">เดือนที่แล้ว {{ number_format($pt_opd_vn_lastm,0) }}</div>
                    </div>
                    <div class="widget-chart-flex">
                        <div class="widget-numbers">
                            <b>{{ $pt_opd_today }}</b>
                        </div>
                        <div class="widget-description ms-auto text-white">
                            <span class="pe-1">{{ number_format(@($pt_opd_hnm * 100 / $pt_opd_vn_lastm),0) }}%</span>
                            <i class="fa fa-angle-up "></i>
                        </div>
                    </div>
                </div>
                <div class="widget-progress-wrapper">
                    <div class="progress-bar-lg progress-bar-animated-alt progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="{{ @($pt_opd_vnm * 100 / $pt_opd_vn_lastm) }}"
                            aria-valuemin="0" aria-valuemax="100" style="width: {{ @($pt_opd_hnm * 100 / $pt_opd_vn_lastm) }}%;">
                        </div>
                    </div>
                    <div class="progress-sub-label text-white">เดือนนี้ {{ number_format($pt_opd_hnm,0) }} คน/{{ number_format($pt_opd_vnm,0) }} ครั้ง</div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <div class="col-md-4">
        <a href="{{ route('stat.ipd') }}" data-bs-toggle="tooltip" title="ข้อมูลผู้ป่วยใน">
        <div class="card mb-3 widget-chart widget-chart2 bg-warm-flame text-start">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content text-white">
                    <div class="widget-chart-flex">
                        <div class="widget-title">ผู้ป่วยในวันนี้</div>
                        <div class="widget-subtitle text-white">เดือนที่แล้ว {{ number_format($ptm_ipd_an_lastm,0) }}</div>
                    </div>
                    <div class="widget-chart-flex">
                        <div class="widget-numbers">
                            <b>{{ $pt_ipd_today }}</b>
                        </div>
                        <div class="widget-description ms-auto text-white">
                            <i class="fa fa-angle-up "></i>
                            <span class="ps-1">{{ number_format(@($ptm_ipd_hn * 100 / $ptm_ipd_an_lastm),0) }}%</span>
                        </div>
                    </div>
                </div>
                <div class="widget-progress-wrapper">
                    <div class="progress-bar-lg progress-bar-animated-alt progress">
                        <div class="progress-bar bg-success"
                            role="progressbar" aria-valuenow="{{ @($ptm_ipd_hn * 100 / $ptm_ipd_an_lastm) }}"
                            aria-valuemin="0" aria-valuemax="100" style="width: {{ @($ptm_ipd_an * 100 / $ptm_ipd_an_lastm) }}%;">
                        </div>
                    </div>
                    <div class="progress-sub-label text-white">เดือนนี้ {{ number_format($ptm_ipd_hn,0) }} คน/{{ number_format($ptm_ipd_an,0) }} ครั้ง</div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <div class="col-md-4">
        <a href="{{ route('stat.er') }}" data-bs-toggle="tooltip" title="ข้อมูลอุบัติเหตุ">
        <div class="card mb-3 widget-chart widget-chart2 bg-mixed-hopes text-start">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content text-white">
                    <div class="widget-chart-flex">
                        <div class="widget-title">ผู้ป่วยอุบัติเหตุวันนี้</div>
                        <div class="widget-subtitle text-white">เดือนที่แล้ว {{ number_format($ptm_er_vn_lastm,0) }}</div>
                    </div>
                    <div class="widget-chart-flex">
                        <div class="widget-numbers">
                            <b>{{ $pt_er_today }}</b>
                        </div>
                        <div class="widget-description ms-auto text-white">
                            <i class="fa fa-arrow-right "></i>
                            <span class="ps-1">10%</span>
                        </div>
                    </div>
                </div>
                <div class="widget-progress-wrapper">
                    <div class="progress-bar-lg progress-bar-animated-alt progress">
                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="10"
                            aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                        </div>
                    </div>
                    <div class="progress-sub-label text-white">เดือนนี้ {{ number_format($pt_er_hn,0) }} คน/{{ number_format($pt_er_vn,0) }} ครั้ง</div>
                </div>
            </div>
        </div>
    </div>
    </a>

</div>

<div class="row">
    <div class="col-lg-6 col-xl-4">
        <div class="card mb-3 widget-content bg-arielle-smile">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">ทันตกรรมวันนี้</div>
                    <div class="widget-subheading">เดือนนี้ {{ number_format($pt_opd_hnm,0) }} คน/{{ number_format($pt_opd_vnm,0) }} ครั้ง</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white">
                        <span>18</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-4">
        <div class="card mb-3 widget-content bg-happy-green">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">แพทย์แผนไทย</div>
                    <div class="widget-subheading">เดือนนี้ {{ number_format($pt_opd_hnm,0) }} คน/{{ number_format($pt_opd_vnm,0) }} ครั้ง</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers">
                        <span>24</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-4">
        <div class="card mb-3 widget-content bg-night-fade">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">ผ่าตัดวันนี้</div>
                    <div class="widget-subheading">เดือนนี้ {{ number_format($pt_opd_hnm,0) }} คน/{{ number_format($pt_opd_vnm,0) }} ครั้ง</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white">
                        <span>13</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-wrapper">
                <div class="widget-content-left">
                    <div class="widget-heading">LAB วันนี้</div>
                    <div class="widget-subheading">เดือนนี้ {{ number_format($pt_opd_hnm,0) }} คน/{{ number_format($pt_opd_vnm,0) }} ครั้ง</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-success">
                        <span>128</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-wrapper">
                <div class="widget-content-left">
                    <div class="widget-heading">X-RAY วันนี้</div>
                    <div class="widget-subheading">เดือนนี้ {{ number_format($pt_opd_hnm,0) }} คน/{{ number_format($pt_opd_vnm,0) }} ครั้ง</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-primary">
                        <span>54</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-wrapper">
                <div class="widget-content-left">
                    <div class="widget-heading">กายภาพบำบัดวันนี้</div>
                    <div class="widget-subheading">เดือนนี้ {{ number_format($pt_opd_hnm,0) }} คน/{{ number_format($pt_opd_vnm,0) }} ครั้ง</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-danger">
                        <span>15</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main-card mb-3 card">
    <div class="row">
        <div class="col-md-4">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">รับ Refer วันนี้</div>
                            <div class="widget-subheading">เดือนนี้ 345 คน/234 ครั้ง</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-warning">34</div>
                        </div>
                    </div>
                    <div class="widget-progress-wrapper">
                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="43"
                                aria-valuemin="0" aria-valuemax="100" style="width: 43%;">
                            </div>
                        </div>
                        <div class="progress-sub-label">
                            <div class="sub-label-left">เดือนที่แล้ว 123</div>
                            <div class="sub-label-right">100%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">ส่ง Refer วันนี้</div>
                            <div class="widget-subheading">เดือนนี้ 345 คน/234 ครั้ง</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-danger">27</div>
                        </div>
                    </div>
                    <div class="widget-progress-wrapper">
                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="77"
                                aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                            </div>
                        </div>
                        <div class="progress-sub-label">
                            <div class="sub-label-left">เดือนที่แล้ว 123</div>
                            <div class="sub-label-right">100%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">คลินิก ARI วันนี้</div>
                            <div class="widget-subheading">เดือนนี้ 345 คน/234 ครั้ง</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-danger">48</div>
                        </div>
                    </div>
                    <div class="widget-progress-wrapper">
                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="65"
                                aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                            </div>
                        </div>
                        <div class="progress-sub-label">
                            <div class="sub-label-left">เดือนที่แล้ว 123</div>
                            <div class="sub-label-right">100%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- โรคติดต่อที่ต้องเฝ้าระวัง --}}

<div class="mb-3 card">
    <div class="card-header-tab card-header">
        <div class="card-header-title">
            <i class="header-icon fa fa-tint icon-gradient bg-love-kiss"></i>
            <h4>โรคติดต่อที่ต้องเฝ้าระวัง</h4>
        </div>
        <div class="btn-actions-pane-right">
            <div class="nav">
                <a href="#tab-eg-44" data-bs-toggle="tab" class="btn-pill btn-wide border-0 btn-transition btn btn-outline-alternate second-tab-toggle-alt">
                    COVID-19
                </a>
                <a href="#tab-eg-66" data-bs-toggle="tab" class="ms-1 btn-pill btn-wide border-0 btn-transition btn btn-outline-warning second-tab-toggle-alt">
                    ท้องร่วง
                </a>
                <a href="#tab-eg-55" data-bs-toggle="tab" class="ms-1 btn-pill btn-wide border-0 btn-transition active btn btn-outline-danger">
                    ไข้เลือดออก
                </a>
            </div>
        </div>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade active show" id="tab-eg-55">
            <div class="widget-chart p-0">
                <div id="bar-vertical-candle-lg"></div>
                <div class="widget-chart-content">
                    <div class="widget-description mt-0 text-warning">
                        <i class="fa fa-arrow-left"></i>
                        <span class="ps-1">175.5%</span>
                        <span class="text-muted opacity-8 ps-1">increased server resources</span>
                    </div>
                </div>
            </div>
            <div class="pt-2 card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="widget-content">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-numbers fsize-3 text-muted">63%</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="text-muted opacity-6">Generated Leads</div>
                                    </div>
                                </div>
                                <div class="widget-progress-wrapper mt-1">
                                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                                        <div class="progress-bar bg-danger"
                                            role="progressbar" aria-valuenow="63" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 63%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="widget-content">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-numbers fsize-3 text-muted">32%</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="text-muted opacity-6">Submitted Tickers</div>
                                    </div>
                                </div>
                                <div class="widget-progress-wrapper mt-1">
                                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                                        <div  class="progress-bar bg-success"
                                            role="progressbar" aria-valuenow="32" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 32%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="widget-content">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-numbers fsize-3 text-muted">71%</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="text-muted opacity-6">Server Allocation</div>
                                    </div>
                                </div>
                                <div class="widget-progress-wrapper mt-1">
                                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                                        <div class="progress-bar bg-primary"
                                            role="progressbar" aria-valuenow="71" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 71%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="widget-content">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-numbers fsize-3 text-muted">41%</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="text-muted opacity-6">Generated Leads</div>
                                    </div>
                                </div>
                                <div class="widget-progress-wrapper mt-1">
                                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                                        <div class="progress-bar bg-warning"
                                            role="progressbar" aria-valuenow="41" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 41%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="tab-eg-44">
            <div class="pt-2 card-body">
                COVID-19
            </div>
        </div>
        <div class="tab-pane fade" id="tab-eg-66">
            <div class="widget-chart p-0">
                <div id="dashboard-sparkline-37"></div>
                <div class="widget-chart-content">
                    <div class="widget-description mt-0 text-success">
                        <i class="fa fa-arrow-up"></i>
                        <span class="pe-1">37.2%</span>
                        <span class="text-muted opacity-8">performance increase</span>
                    </div>
                </div>
            </div>
            <div class="pt-2 card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="widget-content">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-numbers fsize-3 text-muted">23%</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="text-muted opacity-6">Deploys</div>
                                    </div>
                                </div>
                                <div class="widget-progress-wrapper mt-1">
                                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                                        <div class="progress-bar bg-warning"
                                            role="progressbar" aria-valuenow="23" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 23%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="widget-content">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-numbers fsize-3 text-muted">76%</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="text-muted opacity-6">Traffic</div>
                                    </div>
                                </div>
                                <div class="widget-progress-wrapper mt-1">
                                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                                        <div class="progress-bar bg-info"
                                            role="progressbar" aria-valuenow="76" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 76%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="widget-content">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-numbers fsize-3 text-muted">83%</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="text-muted opacity-6">Servers Load</div>
                                    </div>
                                </div>
                                <div class="widget-progress-wrapper mt-1">
                                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                                        <div class="progress-bar bg-danger"
                                            role="progressbar" aria-valuenow="83" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 83%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="widget-content">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-numbers fsize-3 text-muted">48%</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="text-muted opacity-6">Reportd Bugs</div>
                                    </div>
                                </div>
                                <div class="widget-progress-wrapper mt-1">
                                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                                        <div class="progress-bar bg-alternate"
                                            role="progressbar" aria-valuenow="48" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 48%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



{{-- ผู้ป่วยใน --}}

<div class="mbg-3 h-auto ps-0 pe-0 bg-transparent no-border card-header">
    <div class="card-header-title fsize-2 text-capitalize fw-normal"><i class="fa fa-bed btn-icon-wrapper"></i> ผู้ป่วยใน</div>
    <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
        <a href="{{ route('stat.ipd') }}" class="btn btn-link btn-sm">View Detail <i class="fa fa-angle-double-right btn-icon-wrapper"></i></a>
    </div>
</div>

<div class="mb-3 card">
    <div class="tabs-lg-alternate card-header">
        <ul class="nav nav-justified">
            <li class="nav-item">
                <a href="#tab-minimal-1" data-bs-toggle="tab" class="nav-link active minimal-tab-btn-1">
                    <div class="widget-number">
                        <span><h1>ผู้ป่วยในวันนี้</h1></span>
                    </div>
                    <div class="tab-subheading">
                        จำนวนเตียงทั้งหมด 148 เตียง
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a href="#tab-minimal-2" data-bs-toggle="tab" class="nav-link minimal-tab-btn-2">
                    <div class="widget-number text-danger">
                        <span><h1><b>79</b></h1></span>
                    </div>
                    <div class="tab-subheading">
                        Admit อยู่
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a href="#tab-minimal-3" data-bs-toggle="tab" class="nav-link minimal-tab-btn-3">
                    <div class="widget-number text-success">
                        <span><h1><b>65</b></h1></span>
                    </div>
                    <div class="tab-subheading">
                        เตียงว่าง
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade active show" id="tab-minimal-1">

        </div>
        <div class="tab-pane fade" id="tab-minimal-2">
            <div class="card-body">
                <div class="card-header">
                    <div class="card-header-title font-size-lg text-capitalize fw-normal">
                        สถานะตึกผู้ป่วยใน (Admit อยู่)
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="align-middle text-truncate mb-0 table table-borderless table-hover">
                        <thead>
                            <tr>
                                <th class="text-center"></th>
                                <th>ตึก</th>
                                <th>Admit อยู่</th>
                                <th></th>
                                <th class="text-center">ครองเตียง</th>
                                <th class="text-center"></th>
                                <th class="text-center">สถานะ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center text-muted" style="width: 80px;">03</td>
                                <td>
                                    <a href="javascript:void(0)">ตึกสูติกรรม</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)">12/18</a>
                                </td>
                                <td style="width: 80px;">
                                    <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/1.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/2.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/3.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/4.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/5.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/9.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/7.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/8.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="pe-2 opacity-6">
                                        <i class="fa fa-business-time"></i>
                                    </span>
                                    12 Dec
                                </td>
                                <td class="text-center" style="width: 200px;">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left pe-2">
                                                    <div class="widget-numbers fsize-1 text-info">67%</div>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            aria-valuenow="67" aria-valuemin="0"
                                                            aria-valuemax="100" style="width: 67%;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="badge rounded-pill bg-info">Canceled</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center text-muted" style="width: 80px;">04</td>
                                <td>
                                    <a href="javascript:void(0)">ตึก 1</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)">31/35</a>
                                </td>
                                <td style="width: 80px;">
                                    <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/1.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/2.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/3.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/4.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/5.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/9.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/7.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/8.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="pe-2 opacity-6">
                                        <i class="fa fa-business-time"></i>
                                    </span>
                                    12 Dec
                                </td>
                                <td class="text-center" style="width: 200px;">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left pe-2">
                                                    <div class="widget-numbers fsize-1 text-danger">88%</div>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            aria-valuenow="88" aria-valuemin="0"
                                                            aria-valuemax="100" style="width: 88%;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="badge rounded-pill bg-danger">Canceled</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center text-muted" style="width: 80px;">05</td>
                                <td>
                                    <a href="javascript:void(0)">ตึก 2</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)">25/35</a>
                                </td>
                                <td style="width: 80px;">
                                    <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/1.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/2.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/3.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/4.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/5.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/9.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/7.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/8.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="pe-2 opacity-6">
                                        <i class="fa fa-business-time"></i>
                                    </span>
                                    12 Dec
                                </td>
                                <td class="text-center" style="width: 200px;">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left pe-2">
                                                    <div class="widget-numbers fsize-1 text-warning">71%</div>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            aria-valuenow="71" aria-valuemin="0"
                                                            aria-valuemax="100" style="width: 71%;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="badge rounded-pill bg-warning">On Hold</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center text-muted" style="width: 80px;">06</td>
                                <td>
                                    <a href="javascript:void(0)">ตึก 3</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)">11/16</a>
                                </td>
                                <td style="width: 80px;">
                                    <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/1.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/2.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/3.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/4.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/5.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/9.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/7.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/8.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="pe-2 opacity-6">
                                        <i class="fa fa-business-time"></i>
                                    </span>
                                    12 Dec
                                </td>
                                <td class="text-center" style="width: 200px;">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left pe-2">
                                                    <div class="widget-numbers fsize-1 text-info">69%</div>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            aria-valuenow="69" aria-valuemin="0"
                                                            aria-valuemax="100" style="width: 69%;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="badge rounded-pill bg-info">In Progress</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center text-muted" style="width: 80px;">07</td>
                                <td>
                                    <a href="javascript:void(0)">ตึก 4</a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)">6/12</a>
                                </td>
                                <td style="width: 80px;">
                                    <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/1.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/2.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/3.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/4.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/5.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/9.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/7.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/8.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="pe-2 opacity-6">
                                        <i class="fa fa-business-time"></i>
                                    </span>
                                    12 Dec
                                </td>
                                <td class="text-center" style="width: 200px;">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left pe-2">
                                                    <div class="widget-numbers fsize-1 text-success">50%</div>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100" style="width: 50%;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="badge rounded-pill bg-success">Completed</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-block p-4 text-center card-footer">
                    <a href="{{ route('stat.ipd') }}" class="mb-2 me-2 btn-icon btn-pill btn btn-outline-danger">
                        <i class="fa fa-bed btn-icon-wrapper"></i>ข้อมูลผู้ป่วยในเพิ่มเติม
                    </a>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="tab-minimal-3">
            <div class="card-body">
                <div class="card-header">
                    <div class="card-header-title font-size-lg text-capitalize fw-normal">
                        สถานะตึกผู้ป่วยใน (เตียงว่าง)
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="align-middle text-truncate mb-0 table table-borderless table-hover">
                        <thead>
                            <tr>
                                <th class="text-center"></th>
                                <th>ตึก</th>
                                <th>Admit อยู่</th>
                                <th class="text-center">เตียงว่าง</th>
                                <th class="text-center">สามัญ</th>
                                <th class="text-center">พิเศษ</th>
                                <th class="text-center"></th>
                                <th class="text-center">พร้อมรับ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center text-muted" style="width: 80px;">03</td>
                                <td>
                                    <a href="javascript:void(0)">ตึกสูติกรรม</a>
                                </td>
                                <td style="width: 80px;">
                                    <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/1.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/2.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/3.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/4.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/5.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/9.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/7.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                            <div class="avatar-icon">
                                                <i>+</i>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)">6</a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)">4</a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)">2</a>
                                </td>
                                <td class="text-center" style="width: 200px;">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left pe-2">
                                                    <div class="widget-numbers fsize-1 text-info">33%</div>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            aria-valuenow="33" aria-valuemin="0"
                                                            aria-valuemax="100" style="width: 33%;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="badge rounded-pill bg-info">6</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center text-muted" style="width: 80px;">03</td>
                                <td>
                                    <a href="javascript:void(0)">ตึกสูติกรรม</a>
                                </td>
                                <td style="width: 80px;">
                                    <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/1.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/2.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/3.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/4.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/5.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/9.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/7.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                            <div class="avatar-icon">
                                                <i>+</i>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)">6</a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)">4</a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)">2</a>
                                </td>
                                <td class="text-center" style="width: 200px;">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left pe-2">
                                                    <div class="widget-numbers fsize-1 text-info">33%</div>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            aria-valuenow="33" aria-valuemin="0"
                                                            aria-valuemax="100" style="width: 33%;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="badge rounded-pill bg-info">6</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center text-muted" style="width: 80px;">03</td>
                                <td>
                                    <a href="javascript:void(0)">ตึกสูติกรรม</a>
                                </td>
                                <td style="width: 80px;">
                                    <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/1.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/2.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/3.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/4.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/5.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/9.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/7.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                            <div class="avatar-icon">
                                                <i>+</i>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)">6</a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)">4</a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)">2</a>
                                </td>
                                <td class="text-center" style="width: 200px;">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left pe-2">
                                                    <div class="widget-numbers fsize-1 text-info">33%</div>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            aria-valuenow="33" aria-valuemin="0"
                                                            aria-valuemax="100" style="width: 33%;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="badge rounded-pill bg-info">6</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center text-muted" style="width: 80px;">03</td>
                                <td>
                                    <a href="javascript:void(0)">ตึกสูติกรรม</a>
                                </td>
                                <td style="width: 80px;">
                                    <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/1.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/2.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/3.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/4.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/5.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/9.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/7.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                            <div class="avatar-icon">
                                                <i>+</i>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)">6</a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)">4</a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)">2</a>
                                </td>
                                <td class="text-center" style="width: 200px;">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left pe-2">
                                                    <div class="widget-numbers fsize-1 text-info">33%</div>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            aria-valuenow="33" aria-valuemin="0"
                                                            aria-valuemax="100" style="width: 33%;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="badge rounded-pill bg-info">6</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center text-muted" style="width: 80px;">03</td>
                                <td>
                                    <a href="javascript:void(0)">ตึกสูติกรรม</a>
                                </td>
                                <td style="width: 80px;">
                                    <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/1.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/2.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/3.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/4.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/5.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/9.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                            <div class="avatar-icon">
                                                <img src="{{ asset('assets/images/avatars/7.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                            <div class="avatar-icon">
                                                <i>+</i>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)">6</a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)">4</a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)">2</a>
                                </td>
                                <td class="text-center" style="width: 200px;">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left pe-2">
                                                    <div class="widget-numbers fsize-1 text-info">33%</div>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            aria-valuenow="33" aria-valuemin="0"
                                                            aria-valuemax="100" style="width: 33%;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="badge rounded-pill bg-info">6</div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="d-block p-4 text-center card-footer">
                    <a href="{{ route('stat.ipd') }}" class="mb-2 me-2 btn-icon btn-pill btn btn-outline-danger">
                        <i class="fa fa-bed btn-icon-wrapper"></i>ข้อมูลผู้ป่วยในเพิ่มเติม
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 col-md-7">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">รับใหม่วันนี้</div>
                            {{-- <div class="widget-subheading">(เมื่อวาน 12 เตียง)</div> --}}
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-danger">
                                <span>15</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">สิทธิ์ชำระเงินและเบิกได้</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-primary">
                                <span>15</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">จำหน่ายวันนี้</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-success">
                                <span>15</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">สิทธิ์ UC</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-primary">
                                <span>15</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">อัตราการครองเตียง</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-primary">
                                <span>15</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">สิทธิ์อื่นๆ</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-primary">
                                <span>15</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-sm-12 col-md-5">
        <div class="card mb-3 widget-chart widget-chart2 text-start w-100">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content pt-3 pe-3 ps-3">
                    <div class="widget-chart-flex">
                        <div class="widget-numbers">
                            <div class="widget-chart-flex">
                                <div>
                                    <small class="opacity-5"></small>
                                    <span>61.50</span>
                                </div>
                                <div class="widget-title ms-2 opacity-5 font-size-lg text-muted">อัตราการครองเตียง</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0 mb-4">
                    <div id="dashboard-sparkline-carousel-3"></div>
                </div>
            </div>
        </div>

    </div>
</div>

{{-- <div class="main-card mb-3 card">
    <div class="card-header">
        <div class="card-header-title font-size-lg text-capitalize fw-normal">
            Company Agents Status
        </div>
        <div class="btn-actions-pane-right">
            <button type="button" id="PopoverCustomT-1" class="btn-icon btn-wide btn-outline-2x btn btn-outline-focus btn-sm">
                Actions Menu
                <span class="ps-2 align-middle opactiy-7">
                    <i class="fa fa-angle-down"></i>
                </span>
            </button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="align-middle text-truncate mb-0 table table-borderless table-hover">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Avatar</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Company</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Due Date</th>
                    <th class="text-center">Target Achievement</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center text-muted" style="width: 80px;">#54</td>
                    <td class="text-center" style="width: 80px;">
                        <img width="40" class="rounded-circle" src="{{ asset('assets/images/avatars/1.jpg') }}" alt="">
                    </td>
                    <td class="text-center">
                        <a href="javascript:void(0)">Juan C. Cargill</a>
                    </td>
                    <td class="text-center">
                        <a href="javascript:void(0)">Micro Electronics</a>
                    </td>
                    <td class="text-center">
                        <div class="badge rounded-pill bg-danger">Canceled</div>
                    </td>
                    <td class="text-center">
                        <span class="pe-2 opacity-6">
                            <i class="fa fa-business-time"></i>
                        </span>
                        12 Dec
                    </td>
                    <td class="text-center" style="width: 200px;">
                        <div class="widget-content p-0">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left pe-2">
                                        <div class="widget-numbers fsize-1 text-danger">71%</div>
                                    </div>
                                    <div class="widget-content-right w-100">
                                        <div class="progress-bar-xs progress">
                                            <div class="progress-bar bg-danger" role="progressbar"
                                                aria-valuenow="71" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 71%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">
                        <div role="group" class="btn-group-sm btn-group">
                            <button class="btn-shadow btn btn-primary">Hire</button>
                            <button class="btn-shadow btn btn-primary">Fire</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center text-muted" style="width: 80px;">#55</td>
                    <td class="text-center" style="width: 80px;">
                        <img width="40" class="rounded-circle" src="{{ asset('assets/images/avatars/2.jpg') }}" alt="">
                    </td>
                    <td class="text-center">
                        <a href="javascript:void(0)">Johnathan Phelan</a>
                    </td>
                    <td class="text-center">
                        <a href="javascript:void(0)">Hatchworks</a>
                    </td>
                    <td class="text-center">
                        <div class="badge rounded-pill bg-info">On Hold</div>
                    </td>
                    <td class="text-center">
                        <span class="pe-2 opacity-6">
                            <i class="fa fa-business-time"></i>
                        </span>
                        12 Dec
                    </td>
                    <td class="text-center" style="width: 200px;">
                        <div class="widget-content p-0">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left pe-2">
                                        <div class="widget-numbers fsize-1 text-warning">54%</div>
                                    </div>
                                    <div class="widget-content-right w-100">
                                        <div class="progress-bar-xs progress">
                                            <div class="progress-bar bg-warning" role="progressbar"
                                                aria-valuenow="54" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 54%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">
                        <div role="group" class="btn-group-sm btn-group">
                            <button class="btn-shadow btn btn-primary">Hire</button>
                            <button class="btn-shadow btn btn-primary">Fire</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center text-muted" style="width: 80px;">#56</td>
                    <td class="text-center" style="width: 80px;">
                        <img width="40" class="rounded-circle" src="{{ asset('assets/images/avatars/3.jpg') }}" alt="">
                    </td>
                    <td class="text-center">
                        <a href="javascript:void(0)">Darrell Lowe</a>
                    </td>
                    <td class="text-center">
                        <a href="javascript:void(0)">Riddle Electronics</a>
                    </td>
                    <td class="text-center">
                        <div class="badge rounded-pill bg-warning">In Progress</div>
                    </td>
                    <td class="text-center">
                        <span class="pe-2 opacity-6">
                            <i class="fa fa-business-time"></i>
                        </span>
                        12 Dec
                    </td>
                    <td class="text-center" style="width: 200px;">
                        <div class="widget-content p-0">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left pe-2">
                                        <div class="widget-numbers fsize-1 text-success">97%</div>
                                    </div>
                                    <div class="widget-content-right w-100">
                                        <div class="progress-bar-xs progress">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                aria-valuenow="97" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 97%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">
                        <div role="group" class="btn-group-sm btn-group">
                            <button class="btn-shadow btn btn-primary">Hire</button>
                            <button class="btn-shadow btn btn-primary">Fire</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center text-muted" style="width: 80px;">#56</td>
                    <td class="text-center" style="width: 80px;">
                        <img width="40" class="rounded-circle" src="{{ asset('assets/images/avatars/4.jpg') }}" alt="">
                    </td>
                    <td class="text-center">
                        <a href="javascript:void(0)">George T. Cottrell</a>
                    </td>
                    <td class="text-center">
                        <a href="javascript:void(0)">Pixelcloud</a>
                    </td>
                    <td class="text-center">
                        <div class="badge rounded-pill bg-success">Completed</div>
                    </td>
                    <td class="text-center">
                        <span class="pe-2 opacity-6">
                            <i class="fa fa-business-time"></i>
                        </span>
                        12 Dec
                    </td>
                    <td class="text-center" style="width: 200px;">
                        <div class="widget-content p-0">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left pe-2">
                                        <div class="widget-numbers fsize-1 text-info">88%</div>
                                    </div>
                                    <div class="widget-content-right w-100">
                                        <div class="progress-bar-xs progress">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                aria-valuenow="88" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 88%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">
                        <div role="group" class="btn-group-sm btn-group">
                            <button class="btn-shadow btn btn-primary">Hire</button>
                            <button class="btn-shadow btn btn-primary">Fire</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="d-block p-4 text-center card-footer">
        <a href="#" class="mb-2 me-2 btn-icon btn-pill btn btn-outline-danger">
            <i class="fa fa-bed btn-icon-wrapper"></i>ข้อมูลผู้ป่วยใน
        </a>
    </div>
</div> --}}


<div class="mbg-3 h-auto ps-0 pe-0 bg-transparent no-border card-header">
    <div class="card-header-title fsize-2 text-capitalize fw-normal"><i class="fa fa-tasks btn-icon-wrapper"></i> ผู้ป่วยนัดวันนี้</div>
    <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
        <a href="#" class="btn btn-link btn-sm">View Detail <i class="fa fa-angle-double-right btn-icon-wrapper"></i></a>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card mb-3 widget-chart widget-chart2 text-start">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <div class="widget-chart-flex">
                        <div class="widget-title">นัดทั่วไป</div>
                        <div class="widget-subtitle text-muted">รับบริการแล้ว 111</div>
                    </div>
                    <div class="widget-chart-flex">
                        <div class="widget-numbers">
                            <b>222</b>
                        </div>
                        <div class="widget-description ms-auto text-success">
                            <i class="fa fa-angle-down "></i>
                            <span class="ps-1">45%</span>
                        </div>
                    </div>
                </div>
                <div class="widget-progress-wrapper">
                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                        <div class="progress-bar bg-success"  role="progressbar" aria-valuenow="45"
                            aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                        </div>
                    </div>
                    {{-- <div class="progress-sub-label">เดือนนี้ 33 คน/ 44 ครั้ง</div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-3 widget-chart widget-chart2 text-start">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <div class="widget-chart-flex">
                        <div class="widget-title">นัดคลินิกพิเศษ</div>
                        <div class="widget-subtitle text-muted">รับบริการแล้ว 211</div>
                    </div>
                    <div class="widget-chart-flex">
                        <div class="widget-numbers">
                            <b>234</b>
                        </div>
                        <div class="widget-description ms-auto text-warning">
                            <span class="pe-2">66.5%</span>
                            <i class="fa fa-arrow-left "></i>
                        </div>
                    </div>
                </div>
                <div class="widget-progress-wrapper">
                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="85"
                            aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                        </div>
                    </div>
                    {{-- <div class="progress-sub-label">เดือนนี้</div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-3 widget-chart widget-chart2 text-start">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <div class="widget-chart-flex">
                        <div class="widget-title">นัดทันตกรรม</div>
                        <div class="widget-subtitle text-danger opacity-7">รับบริการแล้ว 45</div>
                    </div>
                    <div class="widget-chart-flex">
                        <div class="widget-numbers">
                            <b>87</b>
                        </div>
                        <div class="widget-description ms-auto text-danger">
                            <span class="pe-1">45</span>
                            <i class="fa fa-angle-up "></i>
                        </div>
                    </div>
                </div>
                <div class="widget-progress-wrapper">
                    <div class="progress-bar-sm progress-bar-animated progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="47"
                            aria-valuemin="0" aria-valuemax="100" style="width: 47%;">
                        </div>
                    </div>
                    {{-- <div class="progress-sub-label">เดือนนี้</div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-lg-3">
        <div class="card-shadow-danger mb-3 widget-chart widget-chart2 text-start card">
            <div class="widget-content p-0 w-100">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left pe-2 fsize-1">
                            <div class="widget-numbers mt-0 fsize-3 text-danger">71%</div>
                        </div>
                        <div class="widget-content-right w-100">
                            <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-danger" role="progressbar"
                                    aria-valuenow="71" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 71%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Income Target</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card-shadow-success mb-3 widget-chart widget-chart2 text-start card">
            <div class="widget-content p-0 w-100">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left pe-2 fsize-1">
                            <div class="widget-numbers mt-0 fsize-3 text-success">54%</div>
                        </div>
                        <div class="widget-content-right w-100">
                            <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-success" role="progressbar"
                                    aria-valuenow="54" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 54%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Expenses Target</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card-shadow-warning mb-3 widget-chart widget-chart2 text-start card">
            <div class="widget-content p-0 w-100">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left pe-2 fsize-1">
                            <div class="widget-numbers mt-0 fsize-3 text-warning">32%</div>
                        </div>
                        <div class="widget-content-right w-100">
                            <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-warning"
                                    role="progressbar" aria-valuenow="32"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 32%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Spendings Target</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-start card">
            <div class="widget-content p-0 w-100">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left pe-2 fsize-1">
                            <div class="widget-numbers mt-0 fsize-3 text-info">89%</div>
                        </div>
                        <div class="widget-content-right w-100">
                            <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-info" role="progressbar"
                                    aria-valuenow="89" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 89%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Totals Target</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-wrapper">
                <div class="widget-content-left">
                    <div class="widget-heading">Total Orders</div>
                    <div class="widget-subheading">Last year expenses</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-success">
                        <span>1896</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-wrapper">
                <div class="widget-content-left">
                    <div class="widget-heading">Clients</div>
                    <div class="widget-subheading">Total Clients Profit</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-primary">
                        <span>$ 568</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-wrapper">
                <div class="widget-content-left">
                    <div class="widget-heading">Followers</div>
                    <div class="widget-subheading">People Interested</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-danger">
                        <span>46%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-6 col-lg-4">
        <div class="widget-chart widget-chart2 text-start mb-3 card-btm-border card-shadow-primary border-warning card">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <div class="widget-title opacity-5 text-uppercase">คัดกรองเบาหวาน</div>
                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                        <div class="widget-chart-flex align-items-center">
                            <div>
                                <span class="opacity-10 text-success pe-2">
                                    <i class="fa fa-angle-up"></i>
                                </span>
                                1,234
                                {{-- <small class="opacity-5 ps-1">%</small> --}}
                            </div>
                            <div class="widget-title ms-auto font-size-lg fw-normal text-muted">
                                <div class="circle-progress circle-progress-kpi-warning-lg d-inline-block" data-value="0.67">
                                    <small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="widget-chart widget-chart2 text-start mb-3 card-btm-border card-shadow-danger border-success card">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <div class="widget-title opacity-5 text-uppercase">คัดกรองความดันโลหิตสูง</div>
                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                        <div class="widget-chart-flex align-items-center">
                            <div>
                                <span class="opacity-10 text-danger pe-2">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                                2,345
                                {{-- <small class="opacity-5 ps-1">%</small> --}}
                            </div>
                            <div class="widget-title ms-auto font-size-lg fw-normal text-muted">
                                <div class="circle-progress circle-progress-kpi-success-lg d-inline-block" data-value="0.89">
                                    <small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="widget-chart widget-chart2 text-start mb-3 card-btm-border card-shadow-warning border-danger card">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <div class="widget-title opacity-5 text-uppercase">คัดกรองมะเร็งลำใส้</div>
                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                        <div class="widget-chart-flex align-items-center">
                            <div>
                                {{-- <small class="opacity-5 pe-1">$</small> --}}
                                1,132
                            </div>
                            <div class="widget-title ms-auto font-size-lg fw-normal text-muted">
                                <div class="circle-progress circle-progress-kpi-danger-lg d-inline-block" data-value="0.45">
                                    <small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="col-md-6 col-lg-3">
        <div class="widget-chart widget-chart2 text-start mb-3 card-btm-border card-shadow-success border-success card">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <div class="widget-title opacity-5 text-uppercase">New Employees</div>
                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                        <div class="widget-chart-flex align-items-center">
                            <div>
                                <small class="text-success pe-1">+</small>
                                34
                                <small class="opacity-5 ps-1">hires</small>
                            </div>
                            <div class="widget-title ms-auto font-size-lg fw-normal text-muted">
                                <div class="circle-progress circle-progress-success-sm d-inline-block">
                                    <small></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>

<div class="main-card mb-3 card">
    <div class="g-0 row">
        <div class="col-md-6 col-xl-4">
            <div class="widget-content">
                <div class="widget-content-wrapper">
                    <div class="widget-content-right ms-0 me-3">
                        <div class="widget-numbers text-success">1896</div>
                    </div>
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Orders</div>
                        <div class="widget-subheading">Last year expenses</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="widget-content">
                <div class="widget-content-wrapper">
                    <div class="widget-content-right ms-0 me-3">
                        <div class="widget-numbers text-warning">$ 14M</div>
                    </div>
                    <div class="widget-content-left">
                        <div class="widget-heading">Products Sold</div>
                        <div class="widget-subheading">Total revenue streams</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="widget-content">
                <div class="widget-content-wrapper">
                    <div class="widget-content-right ms-0 me-3">
                        <div class="widget-numbers text-danger">45.9%</div>
                    </div>
                    <div class="widget-content-left">
                        <div class="widget-heading">Followers</div>
                        <div class="widget-subheading">People Interested</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-xl-none d-md-block col-md-6 col-xl-4">
            <div class="widget-content">
                <div class="widget-content-wrapper">
                    <div class="widget-content-right ms-0 me-3">
                        <div class="widget-numbers text-danger">45.9%</div>
                    </div>
                    <div class="widget-content-left">
                        <div class="widget-heading">Followers</div>
                        <div class="widget-subheading">People Interested</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- @endsection --}}

</div> {{-- สำคัญสำหรับ wire: </div> ห้ามเอาออก  --}}
