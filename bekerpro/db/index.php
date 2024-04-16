<!DOCTYPE html>

<html lang="es">
<!--begin::Head-->

<head>
	<title>Stock Pro - Beta Tester</title>
	<meta charset="utf-8" />
	<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
	<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template - Metronic by KeenThemes" />
	<meta property="og:url" content="https://keenthemes.com/metronic" />
	<meta property="og:site_name" content="Metronic by Keenthemes" />
	<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
	<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

	<!--begin::Fonts(mandatory for all pages)-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

	<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
	<!--end::Fonts-->
	<!--begin::Vendor Stylesheets(used for this page only)-->
	<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

	<script type="importmap">
		{
          "imports": {
            "@google/generative-ai": "https://esm.run/@google/generative-ai"
          }
        }
    </script>
	<script type="module">
		import {
			GoogleGenerativeAI
		} from "@google/generative-ai";

		// Access your API key (see "Set up your API key" above)
		const API_KEY = "AIzaSyAW-8QMNAaa_VvjDWkgT3Q60BB0pSHEmdw";

		// Access your API key (see "Set up your API key" above)
		const genAI = new GoogleGenerativeAI(API_KEY);

		// ...

		const model = genAI.getGenerativeModel({
			model: "MODEL_NAME"
		});

		// ...
	</script>
	<!--end::Global Stylesheets Bundle-->
	<script>
		// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
	</script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" class="app-default">
	<!--begin::Theme mode setup on page load-->
	<script>
		var defaultThemeMode = "light";
		var themeMode;
		if (document.documentElement) {
			if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
				themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
			} else {
				if (localStorage.getItem("data-bs-theme") !== null) {
					themeMode = localStorage.getItem("data-bs-theme");
				} else {
					themeMode = defaultThemeMode;
				}
			}
			if (themeMode === "system") {
				themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
			}
			document.documentElement.setAttribute("data-bs-theme", themeMode);
		}
	</script>
	<!--end::Theme mode setup on page load-->
	<!--begin::App-->
	<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
		<!--begin::Page-->
		<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
			<!--begin::Header-->
			<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate-="true" data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
				<!--begin::Header container-->
				<div class="app-container container-xxl d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
					<!--begin::Header wrapper-->
					<div class="app-header-wrapper d-flex flex-grow-1 align-items-stretch justify-content-between" id="kt_app_header_wrapper">
						<!--begin::Menu wrapper-->
						<div class="app-header-menu app-header-mobile-drawer align-items-start align-items-lg-center w-100" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
							<!--begin::Menu-->
							<div class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-state-primary menu-title-gray-700 menu-arrow-gray-500 menu-bullet-gray-500 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="#kt_header_menu" data-kt-menu="true">
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-title">Dashboards</span>
										<span class="menu-arrow d-lg-none"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
										<!--begin:Dashboards menu-->
										<div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible" data-kt-menu-dismiss="true">
											<!--begin:Row-->
											<div class="row">
												<!--begin:Col-->
												<div class="col-lg-8 mb-3 mb-lg-0 py-3 px-3 py-lg-6 px-lg-6">
													<!--begin:Row-->
													<div class="row">
														<!--begin:Col-->
														<div class="col-lg-6 mb-3">
															<!--begin:Menu item-->
															<div class="menu-item p-0 m-0">
																<!--begin:Menu link-->
																<a href="index.html" class="menu-link active">
																	<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																		<i class="ki-outline ki-element-11 text-primary fs-1"></i>
																	</span>
																	<span class="d-flex flex-column">
																		<span class="fs-6 fw-bold text-gray-800">Default</span>
																		<span class="fs-7 fw-semibold text-muted">Reports
																			& statistics</span>
																	</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Col-->
														<!--begin:Col-->
														<div class="col-lg-6 mb-3">
															<!--begin:Menu item-->
															<div class="menu-item p-0 m-0">
																<!--begin:Menu link-->
																<a href="dashboards/ecommerce.html" class="menu-link">
																	<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																		<i class="ki-outline ki-basket text-danger fs-1"></i>
																	</span>
																	<span class="d-flex flex-column">
																		<span class="fs-6 fw-bold text-gray-800">eCommerce</span>
																		<span class="fs-7 fw-semibold text-muted">Sales
																			reports</span>
																	</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Col-->
														<!--begin:Col-->
														<div class="col-lg-6 mb-3">
															<!--begin:Menu item-->
															<div class="menu-item p-0 m-0">
																<!--begin:Menu link-->
																<a href="dashboards/projects.html" class="menu-link">
																	<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																		<i class="ki-outline ki-abstract-44 text-info fs-1"></i>
																	</span>
																	<span class="d-flex flex-column">
																		<span class="fs-6 fw-bold text-gray-800">Projects</span>
																		<span class="fs-7 fw-semibold text-muted">Tasts,
																			graphs & charts</span>
																	</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Col-->
														<!--begin:Col-->
														<div class="col-lg-6 mb-3">
															<!--begin:Menu item-->
															<div class="menu-item p-0 m-0">
																<!--begin:Menu link-->
																<a href="dashboards/online-courses.html" class="menu-link">
																	<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																		<i class="ki-outline ki-color-swatch text-success fs-1"></i>
																	</span>
																	<span class="d-flex flex-column">
																		<span class="fs-6 fw-bold text-gray-800">Online
																			Courses</span>
																		<span class="fs-7 fw-semibold text-muted">Student
																			progress</span>
																	</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Col-->
														<!--begin:Col-->
														<div class="col-lg-6 mb-3">
															<!--begin:Menu item-->
															<div class="menu-item p-0 m-0">
																<!--begin:Menu link-->
																<a href="dashboards/marketing.html" class="menu-link">
																	<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																		<i class="ki-outline ki-chart-simple text-gray-900 fs-1"></i>
																	</span>
																	<span class="d-flex flex-column">
																		<span class="fs-6 fw-bold text-gray-800">Marketing</span>
																		<span class="fs-7 fw-semibold text-muted">Campaings
																			& conversions</span>
																	</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Col-->
														<!--begin:Col-->
														<div class="col-lg-6 mb-3">
															<!--begin:Menu item-->
															<div class="menu-item p-0 m-0">
																<!--begin:Menu link-->
																<a href="dashboards/bidding.html" class="menu-link">
																	<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																		<i class="ki-outline ki-switch text-warning fs-1"></i>
																	</span>
																	<span class="d-flex flex-column">
																		<span class="fs-6 fw-bold text-gray-800">Bidding</span>
																		<span class="fs-7 fw-semibold text-muted">Campaings
																			& conversions</span>
																	</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Col-->
														<!--begin:Col-->
														<div class="col-lg-6 mb-3">
															<!--begin:Menu item-->
															<div class="menu-item p-0 m-0">
																<!--begin:Menu link-->
																<a href="dashboards/pos.html" class="menu-link">
																	<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																		<i class="ki-outline ki-abstract-42 text-danger fs-1"></i>
																	</span>
																	<span class="d-flex flex-column">
																		<span class="fs-6 fw-bold text-gray-800">POS
																			System</span>
																		<span class="fs-7 fw-semibold text-muted">Campaings
																			& conversions</span>
																	</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Col-->
														<!--begin:Col-->
														<div class="col-lg-6 mb-3">
															<!--begin:Menu item-->
															<div class="menu-item p-0 m-0">
																<!--begin:Menu link-->
																<a href="dashboards/call-center.html" class="menu-link">
																	<span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
																		<i class="ki-outline ki-call text-primary fs-1"></i>
																	</span>
																	<span class="d-flex flex-column">
																		<span class="fs-6 fw-bold text-gray-800">Call
																			Center</span>
																		<span class="fs-7 fw-semibold text-muted">Campaings
																			& conversions</span>
																	</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Col-->
													</div>
													<!--end:Row-->
													<div class="separator separator-dashed mx-5 my-5"></div>
													<!--begin:Landing-->
													<div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mx-5">
														<div class="d-flex flex-column me-5">
															<div class="fs-6 fw-bold text-gray-800">Landing Page
																Template</div>
															<div class="fs-7 fw-semibold text-muted">Onpe page landing
																template with pricing & others</div>
														</div>
														<a href="landing.html" class="btn btn-sm btn-primary fw-bold">Explore</a>
													</div>
													<!--end:Landing-->
												</div>
												<!--end:Col-->
												<!--begin:Col-->
												<div class="menu-more bg-light col-lg-4 py-3 px-3 py-lg-6 px-lg-6 rounded-end">
													<!--begin:Heading-->
													<h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">More
														Dashboards</h4>
													<!--end:Heading-->
													<!--begin:Menu item-->
													<div class="menu-item p-0 m-0">
														<!--begin:Menu link-->
														<a href="dashboards/logistics.html" class="menu-link py-2">
															<span class="menu-title">Logistics</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item p-0 m-0">
														<!--begin:Menu link-->
														<a href="dashboards/website-analytics.html" class="menu-link py-2">
															<span class="menu-title">Website Analytics</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item p-0 m-0">
														<!--begin:Menu link-->
														<a href="dashboards/finance-performance.html" class="menu-link py-2">
															<span class="menu-title">Finance Performance</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item p-0 m-0">
														<!--begin:Menu link-->
														<a href="dashboards/store-analytics.html" class="menu-link py-2">
															<span class="menu-title">Store Analytics</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item p-0 m-0">
														<!--begin:Menu link-->
														<a href="dashboards/social.html" class="menu-link py-2">
															<span class="menu-title">Social</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item p-0 m-0">
														<!--begin:Menu link-->
														<a href="dashboards/delivery.html" class="menu-link py-2">
															<span class="menu-title">Delivery</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item p-0 m-0">
														<!--begin:Menu link-->
														<a href="dashboards/crypto.html" class="menu-link py-2">
															<span class="menu-title">Crypto</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item p-0 m-0">
														<!--begin:Menu link-->
														<a href="dashboards/school.html" class="menu-link py-2">
															<span class="menu-title">School</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
													<!--begin:Menu item-->
													<div class="menu-item p-0 m-0">
														<!--begin:Menu link-->
														<a href="dashboards/podcast.html" class="menu-link py-2">
															<span class="menu-title">Podcast</span>
														</a>
														<!--end:Menu link-->
													</div>
													<!--end:Menu item-->
												</div>
												<!--end:Col-->
											</div>
											<!--end:Row-->
										</div>
										<!--end:Dashboards menu-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-title">Pages</span>
										<span class="menu-arrow d-lg-none"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">
										<!--begin:Pages menu-->
										<div class="menu-active-bg px-4 px-lg-0">
											<!--begin:Tabs nav-->
											<div class="d-flex w-100 overflow-auto">
												<ul class="nav nav-stretch nav-line-tabs fw-bold fs-6 p-0 p-lg-10 flex-nowrap flex-grow-1">
													<!--begin:Nav item-->
													<li class="nav-item mx-lg-1">
														<a class="nav-link py-3 py-lg-6 active text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_pages">General</a>
													</li>
													<!--end:Nav item-->
													<!--begin:Nav item-->
													<li class="nav-item mx-lg-1">
														<a class="nav-link py-3 py-lg-6 text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_account">Account</a>
													</li>
													<!--end:Nav item-->
													<!--begin:Nav item-->
													<li class="nav-item mx-lg-1">
														<a class="nav-link py-3 py-lg-6 text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_authentication">Authentication</a>
													</li>
													<!--end:Nav item-->
													<!--begin:Nav item-->
													<li class="nav-item mx-lg-1">
														<a class="nav-link py-3 py-lg-6 text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_utilities">Utilities</a>
													</li>
													<!--end:Nav item-->
													<!--begin:Nav item-->
													<li class="nav-item mx-lg-1">
														<a class="nav-link py-3 py-lg-6 text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_widgets">Widgets</a>
													</li>
													<!--end:Nav item-->
												</ul>
											</div>
											<!--end:Tabs nav-->
											<!--begin:Tab content-->
											<div class="tab-content py-4 py-lg-8 px-lg-7">
												<!--begin:Tab pane-->
												<div class="tab-pane active w-lg-1000px" id="kt_app_header_menu_pages_pages">
													<!--begin:Row-->
													<div class="row">
														<!--begin:Col-->
														<div class="col-lg-8">
															<!--begin:Row-->
															<div class="row">
																<!--begin:Col-->
																<div class="col-lg-3 mb-6 mb-lg-0">
																	<!--begin:Menu heading-->
																	<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">User
																		Profile</h4>
																	<!--end:Menu heading-->
																	<!--begin:Menu item-->
																	<div class="menu-item p-0 m-0">
																		<!--begin:Menu link-->
																		<a href="pages/user-profile/overview.html" class="menu-link">
																			<span class="menu-title">Overview</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item p-0 m-0">
																		<!--begin:Menu link-->
																		<a href="pages/user-profile/projects.html" class="menu-link">
																			<span class="menu-title">Projects</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item p-0 m-0">
																		<!--begin:Menu link-->
																		<a href="pages/user-profile/campaigns.html" class="menu-link">
																			<span class="menu-title">Campaigns</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item p-0 m-0">
																		<!--begin:Menu link-->
																		<a href="pages/user-profile/documents.html" class="menu-link">
																			<span class="menu-title">Documents</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item p-0 m-0">
																		<!--begin:Menu link-->
																		<a href="pages/user-profile/followers.html" class="menu-link">
																			<span class="menu-title">Followers</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item p-0 m-0">
																		<!--begin:Menu link-->
																		<a href="pages/user-profile/activity.html" class="menu-link">
																			<span class="menu-title">Activity</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																</div>
																<!--end:Col-->
																<!--begin:Col-->
																<div class="col-lg-3 mb-6 mb-lg-0">
																	<!--begin:Menu section-->
																	<div class="mb-6">
																		<!--begin:Menu heading-->
																		<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
																			Corporate</h4>
																		<!--end:Menu heading-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="pages/about.html" class="menu-link">
																				<span class="menu-title">About</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="pages/team.html" class="menu-link">
																				<span class="menu-title">Our Team</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="pages/contact.html" class="menu-link">
																				<span class="menu-title">Contact
																					Us</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="pages/licenses.html" class="menu-link">
																				<span class="menu-title">Licenses</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="pages/sitemap.html" class="menu-link">
																				<span class="menu-title">Sitemap</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																	</div>
																	<!--end:Menu section-->
																	<!--begin:Menu section-->
																	<div class="mb-0">
																		<!--begin:Menu heading-->
																		<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
																			Careers</h4>
																		<!--end:Menu heading-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="pages/careers/list.html" class="menu-link">
																				<span class="menu-title">Careers
																					List</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="pages/careers/apply.html" class="menu-link">
																				<span class="menu-title">Careers
																					Apply</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																	</div>
																	<!--end:Menu section-->
																</div>
																<!--end:Col-->
																<!--begin:Col-->
																<div class="col-lg-3 mb-6 mb-lg-0">
																	<!--begin:Menu section-->
																	<div class="mb-6">
																		<!--begin:Menu heading-->
																		<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">FAQ
																		</h4>
																		<!--end:Menu heading-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="pages/faq/classic.html" class="menu-link">
																				<span class="menu-title">FAQ
																					Classic</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="pages/faq/extended.html" class="menu-link">
																				<span class="menu-title">FAQ
																					Extended</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																	</div>
																	<!--end:Menu section-->
																	<!--begin:Menu section-->
																	<div class="mb-6">
																		<!--begin:Menu heading-->
																		<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Blog
																		</h4>
																		<!--end:Menu heading-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="pages/blog/home.html" class="menu-link">
																				<span class="menu-title">Blog
																					Home</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="pages/blog/post.html" class="menu-link">
																				<span class="menu-title">Blog
																					Post</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																	</div>
																	<!--end:Menu section-->
																	<!--begin:Menu section-->
																	<div class="mb-0">
																		<!--begin:Menu heading-->
																		<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
																			Pricing</h4>
																		<!--end:Menu heading-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="pages/pricing.html" class="menu-link">
																				<span class="menu-title">Column
																					Pricing</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="pages/pricing/table.html" class="menu-link">
																				<span class="menu-title">Table
																					Pricing</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																	</div>
																	<!--end:Menu section-->
																</div>
																<!--end:Col-->
																<!--begin:Col-->
																<div class="col-lg-3 mb-6 mb-lg-0">
																	<!--begin:Menu section-->
																	<div class="mb-0">
																		<!--begin:Menu heading-->
																		<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
																			Social</h4>
																		<!--end:Menu heading-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="pages/social/feeds.html" class="menu-link">
																				<span class="menu-title">Feeds</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="pages/social/activity.html" class="menu-link">
																				<span class="menu-title">Activty</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="pages/social/followers.html" class="menu-link">
																				<span class="menu-title">Followers</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="pages/social/settings.html" class="menu-link">
																				<span class="menu-title">Settings</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																	</div>
																	<!--end:Menu section-->
																</div>
																<!--end:Col-->
															</div>
															<!--end:Row-->
														</div>
														<!--end:Col-->
														<!--begin:Col-->
														<div class="col-lg-4">
															<img src="assets/media/stock/600x600/img-82.jpg" class="rounded mw-100" alt="" />
														</div>
														<!--end:Col-->
													</div>
													<!--end:Row-->
												</div>
												<!--end:Tab pane-->
												<!--begin:Tab pane-->
												<div class="tab-pane w-lg-600px" id="kt_app_header_menu_pages_account">
													<!--begin:Row-->
													<div class="row">
														<!--begin:Col-->
														<div class="col-lg-5 mb-6 mb-lg-0">
															<!--begin:Row-->
															<div class="row">
																<!--begin:Col-->
																<div class="col-lg-6">
																	<!--begin:Menu item-->
																	<div class="menu-item p-0 m-0">
																		<!--begin:Menu link-->
																		<a href="account/overview.html" class="menu-link">
																			<span class="menu-title">Overview</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item p-0 m-0">
																		<!--begin:Menu link-->
																		<a href="account/settings.html" class="menu-link">
																			<span class="menu-title">Settings</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item p-0 m-0">
																		<!--begin:Menu link-->
																		<a href="account/security.html" class="menu-link">
																			<span class="menu-title">Security</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item p-0 m-0">
																		<!--begin:Menu link-->
																		<a href="account/activity.html" class="menu-link">
																			<span class="menu-title">Activity</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item p-0 m-0">
																		<!--begin:Menu link-->
																		<a href="account/billing.html" class="menu-link">
																			<span class="menu-title">Billing</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																</div>
																<!--end:Col-->
																<!--begin:Col-->
																<div class="col-lg-6">
																	<!--begin:Menu item-->
																	<div class="menu-item p-0 m-0">
																		<!--begin:Menu link-->
																		<a href="account/statements.html" class="menu-link">
																			<span class="menu-title">Statements</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item p-0 m-0">
																		<!--begin:Menu link-->
																		<a href="account/referrals.html" class="menu-link">
																			<span class="menu-title">Referrals</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item p-0 m-0">
																		<!--begin:Menu link-->
																		<a href="account/api-keys.html" class="menu-link">
																			<span class="menu-title">API Keys</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																	<!--begin:Menu item-->
																	<div class="menu-item p-0 m-0">
																		<!--begin:Menu link-->
																		<a href="account/logs.html" class="menu-link">
																			<span class="menu-title">Logs</span>
																		</a>
																		<!--end:Menu link-->
																	</div>
																	<!--end:Menu item-->
																</div>
																<!--end:Col-->
															</div>
															<!--end:Row-->
														</div>
														<!--end:Col-->
														<!--begin:Col-->
														<div class="col-lg-7">
															<img src="assets/media/stock/900x600/46.jpg" class="rounded mw-100" alt="" />
														</div>
														<!--end:Col-->
													</div>
													<!--end:Row-->
												</div>
												<!--end:Tab pane-->
												<!--begin:Tab pane-->
												<div class="tab-pane w-lg-1000px" id="kt_app_header_menu_pages_authentication">
													<!--begin:Row-->
													<div class="row">
														<!--begin:Col-->
														<div class="col-lg-3 mb-6 mb-lg-0">
															<!--begin:Menu section-->
															<div class="mb-6">
																<!--begin:Menu heading-->
																<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Corporate
																	Layout</h4>
																<!--end:Menu heading-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/layouts/corporate/sign-in.html" class="menu-link">
																		<span class="menu-title">Sign-In</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/layouts/corporate/sign-up.html" class="menu-link">
																		<span class="menu-title">Sign-Up</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/layouts/corporate/two-factor.html" class="menu-link">
																		<span class="menu-title">Two-Factor</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/layouts/corporate/reset-password.html" class="menu-link">
																		<span class="menu-title">Reset Password</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/layouts/corporate/new-password.html" class="menu-link">
																		<span class="menu-title">New Password</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
															</div>
															<!--end:Menu section-->
															<!--begin:Menu section-->
															<div class="mb-0">
																<!--begin:Menu heading-->
																<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Overlay
																	Layout</h4>
																<!--end:Menu heading-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/layouts/overlay/sign-in.html" class="menu-link">
																		<span class="menu-title">Sign-In</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/layouts/overlay/sign-up.html" class="menu-link">
																		<span class="menu-title">Sign-Up</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/layouts/overlay/two-factor.html" class="menu-link">
																		<span class="menu-title">Two-Factor</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/layouts/overlay/reset-password.html" class="menu-link">
																		<span class="menu-title">Reset Password</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/layouts/overlay/new-password.html" class="menu-link">
																		<span class="menu-title">New Password</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
															</div>
															<!--end:Menu section-->
														</div>
														<!--end:Col-->
														<!--begin:Col-->
														<div class="col-lg-3 mb-6 mb-lg-0">
															<!--begin:Menu section-->
															<div class="mb-6">
																<!--begin:Menu heading-->
																<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Creative
																	Layout</h4>
																<!--end:Menu heading-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/layouts/creative/sign-in.html" class="menu-link">
																		<span class="menu-title">Sign-in</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/layouts/creative/sign-up.html" class="menu-link">
																		<span class="menu-title">Sign-up</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/layouts/creative/two-factor.html" class="menu-link">
																		<span class="menu-title">Two-Factor</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/layouts/creative/reset-password.html" class="menu-link">
																		<span class="menu-title">Reset Password</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/layouts/creative/new-password.html" class="menu-link">
																		<span class="menu-title">New Password</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
															</div>
															<!--end:Menu section-->
															<!--begin:Menu section-->
															<div class="mb-6">
																<!--begin:Menu heading-->
																<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Fancy Layout
																</h4>
																<!--end:Menu heading-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/layouts/fancy/sign-in.html" class="menu-link">
																		<span class="menu-title">Sign-In</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/layouts/fancy/sign-up.html" class="menu-link">
																		<span class="menu-title">Sign-Up</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/layouts/fancy/two-factor.html" class="menu-link">
																		<span class="menu-title">Two-Factor</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/layouts/fancy/reset-password.html" class="menu-link">
																		<span class="menu-title">Reset Password</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/layouts/fancy/new-password.html" class="menu-link">
																		<span class="menu-title">New Password</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
															</div>
															<!--end:Menu section-->
														</div>
														<!--end:Col-->
														<!--begin:Col-->
														<div class="col-lg-3 mb-6 mb-lg-0">
															<!--begin:Menu section-->
															<div class="mb-0">
																<!--begin:Menu heading-->
																<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">General</h4>
																<!--end:Menu heading-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/extended/multi-steps-sign-up.html" class="menu-link">
																		<span class="menu-title">Multi-Steps
																			Sign-Up</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/general/welcome.html" class="menu-link">
																		<span class="menu-title">Welcome Message</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/general/verify-email.html" class="menu-link">
																		<span class="menu-title">Verify Email</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/general/coming-soon.html" class="menu-link">
																		<span class="menu-title">Coming Soon</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/general/password-confirmation.html" class="menu-link">
																		<span class="menu-title">Password
																			Confirmation</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/general/account-deactivated.html" class="menu-link">
																		<span class="menu-title">Account
																			Deactivation</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/general/error-404.html" class="menu-link">
																		<span class="menu-title">Error 404</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/general/error-500.html" class="menu-link">
																		<span class="menu-title">Error 500</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
															</div>
															<!--end:Menu section-->
														</div>
														<!--end:Col-->
														<!--begin:Col-->
														<div class="col-lg-3 mb-6 mb-lg-0">
															<!--begin:Menu section-->
															<div class="mb-0">
																<!--begin:Menu heading-->
																<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Email
																	Templates</h4>
																<!--end:Menu heading-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/email/welcome-message.html" class="menu-link">
																		<span class="menu-title">Welcome Message</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/email/reset-password.html" class="menu-link">
																		<span class="menu-title">Reset Password</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/email/subscription-confirmed.html" class="menu-link">
																		<span class="menu-title">Subscription
																			Confirmed</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/email/card-declined.html" class="menu-link">
																		<span class="menu-title">Credit Card
																			Declined</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/email/promo-1.html" class="menu-link">
																		<span class="menu-title">Promo 1</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/email/promo-2.html" class="menu-link">
																		<span class="menu-title">Promo 2</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
																<!--begin:Menu item-->
																<div class="menu-item p-0 m-0">
																	<!--begin:Menu link-->
																	<a href="authentication/email/promo-3.html" class="menu-link">
																		<span class="menu-title">Promo 3</span>
																	</a>
																	<!--end:Menu link-->
																</div>
																<!--end:Menu item-->
															</div>
															<!--end:Menu section-->
														</div>
														<!--end:Col-->
													</div>
													<!--end:Row-->
												</div>
												<!--end:Tab pane-->
												<!--begin:Tab pane-->
												<div class="tab-pane w-lg-1000px" id="kt_app_header_menu_pages_utilities">
													<!--begin:Row-->
													<div class="row">
														<!--begin:Col-->
														<div class="col-lg-7">
															<!--begin:Row-->
															<div class="row">
																<!--begin:Col-->
																<div class="col-lg-4 mb-6 mb-lg-0">
																	<!--begin:Menu section-->
																	<div class="mb-0">
																		<!--begin:Menu heading-->
																		<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
																			General Modals</h4>
																		<!--end:Menu heading-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/modals/general/invite-friends.html" class="menu-link">
																				<span class="menu-title">Invite
																					Friends</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/modals/general/view-users.html" class="menu-link">
																				<span class="menu-title">View
																					Users</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/modals/general/select-users.html" class="menu-link">
																				<span class="menu-title">Select
																					Users</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/modals/general/upgrade-plan.html" class="menu-link">
																				<span class="menu-title">Upgrade
																					Plan</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/modals/general/share-earn.html" class="menu-link">
																				<span class="menu-title">Share &
																					Earn</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/modals/forms/new-target.html" class="menu-link">
																				<span class="menu-title">New
																					Target</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/modals/forms/new-card.html" class="menu-link">
																				<span class="menu-title">New Card</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/modals/forms/new-address.html" class="menu-link">
																				<span class="menu-title">New
																					Address</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/modals/forms/create-api-key.html" class="menu-link">
																				<span class="menu-title">Create API
																					Key</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/modals/forms/bidding.html" class="menu-link">
																				<span class="menu-title">Bidding</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																	</div>
																	<!--end:Menu section-->
																</div>
																<!--end:Col-->
																<!--begin:Col-->
																<div class="col-lg-4 mb-6 mb-lg-0">
																	<!--begin:Menu section-->
																	<div class="mb-6">
																		<!--begin:Menu heading-->
																		<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
																			Advanced Modals</h4>
																		<!--end:Menu heading-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/modals/wizards/create-app.html" class="menu-link">
																				<span class="menu-title">Create
																					App</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/modals/wizards/create-campaign.html" class="menu-link">
																				<span class="menu-title">Create
																					Campaign</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/modals/wizards/create-account.html" class="menu-link">
																				<span class="menu-title">Create Business
																					Acc</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/modals/wizards/create-project.html" class="menu-link">
																				<span class="menu-title">Create
																					Project</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/modals/wizards/top-up-wallet.html" class="menu-link">
																				<span class="menu-title">Top Up
																					Wallet</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/modals/wizards/offer-a-deal.html" class="menu-link">
																				<span class="menu-title">Offer a
																					Deal</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/modals/wizards/two-factor-authentication.html" class="menu-link">
																				<span class="menu-title">Two Factor
																					Auth</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																	</div>
																	<!--end:Menu section-->
																	<!--begin:Menu section-->
																	<div class="mb-0">
																		<!--begin:Menu heading-->
																		<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
																			Search</h4>
																		<!--end:Menu heading-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/search/horizontal.html" class="menu-link">
																				<span class="menu-title">Horizontal</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/search/vertical.html" class="menu-link">
																				<span class="menu-title">Vertical</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/modals/search/users.html" class="menu-link">
																				<span class="menu-title">Users</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/modals/search/select-location.html" class="menu-link">
																				<span class="menu-title">Select
																					Location</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																	</div>
																	<!--end:Menu section-->
																</div>
																<!--end:Col-->
																<!--begin:Col-->
																<div class="col-lg-4 mb-6 mb-lg-0">
																	<!--begin:Menu section-->
																	<div class="mb-0">
																		<!--begin:Menu heading-->
																		<h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
																			Wizards</h4>
																		<!--end:Menu heading-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/wizards/horizontal.html" class="menu-link">
																				<span class="menu-title">Horizontal</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/wizards/vertical.html" class="menu-link">
																				<span class="menu-title">Vertical</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/wizards/two-factor-authentication.html" class="menu-link">
																				<span class="menu-title">Two Factor
																					Auth</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/wizards/create-app.html" class="menu-link">
																				<span class="menu-title">Create
																					App</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/wizards/create-campaign.html" class="menu-link">
																				<span class="menu-title">Create
																					Campaign</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/wizards/create-account.html" class="menu-link">
																				<span class="menu-title">Create
																					Account</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/wizards/create-project.html" class="menu-link">
																				<span class="menu-title">Create
																					Project</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/modals/wizards/top-up-wallet.html" class="menu-link">
																				<span class="menu-title">Top Up
																					Wallet</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																		<!--begin:Menu item-->
																		<div class="menu-item p-0 m-0">
																			<!--begin:Menu link-->
																			<a href="utilities/wizards/offer-a-deal.html" class="menu-link">
																				<span class="menu-title">Offer a
																					Deal</span>
																			</a>
																			<!--end:Menu link-->
																		</div>
																		<!--end:Menu item-->
																	</div>
																	<!--end:Menu section-->
																</div>
																<!--end:Col-->
															</div>
															<!--end:Row-->
														</div>
														<!--end:Col-->
														<!--begin:Col-->
														<div class="col-lg-5 pe-lg-5">
															<img src="assets/media/stock/600x600/img-84.jpg" class="rounded mw-100" alt="" />
														</div>
														<!--end:Col-->
													</div>
													<!--end:Row-->
												</div>
												<!--end:Tab pane-->
												<!--begin:Tab pane-->
												<div class="tab-pane w-lg-500px" id="kt_app_header_menu_pages_widgets">
													<!--begin:Row-->
													<div class="row">
														<!--begin:Col-->
														<div class="col-lg-4 mb-6 mb-lg-0">
															<!--begin:Menu item-->
															<div class="menu-item p-0 m-0">
																<!--begin:Menu link-->
																<a href="widgets/lists.html" class="menu-link">
																	<span class="menu-title">Lists</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item p-0 m-0">
																<!--begin:Menu link-->
																<a href="widgets/statistics.html" class="menu-link">
																	<span class="menu-title">Statistics</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item p-0 m-0">
																<!--begin:Menu link-->
																<a href="widgets/charts.html" class="menu-link">
																	<span class="menu-title">Charts</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item p-0 m-0">
																<!--begin:Menu link-->
																<a href="widgets/mixed.html" class="menu-link">
																	<span class="menu-title">Mixed</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item p-0 m-0">
																<!--begin:Menu link-->
																<a href="widgets/tables.html" class="menu-link">
																	<span class="menu-title">Tables</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
															<!--begin:Menu item-->
															<div class="menu-item p-0 m-0">
																<!--begin:Menu link-->
																<a href="widgets/feeds.html" class="menu-link">
																	<span class="menu-title">Feeds</span>
																</a>
																<!--end:Menu link-->
															</div>
															<!--end:Menu item-->
														</div>
														<!--end:Col-->
														<!--begin:Col-->
														<div class="col-lg-8">
															<img src="assets/media/stock/900x600/44.jpg" class="rounded mw-100" alt="" />
														</div>
														<!--end:Col-->
													</div>
													<!--end:Row-->
												</div>
												<!--end:Tab pane-->
											</div>
											<!--end:Tab content-->
										</div>
										<!--end:Pages menu-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-title">Apps</span>
										<span class="menu-arrow d-lg-none"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-icon">
													<i class="ki-outline ki-rocket fs-2"></i>
												</span>
												<span class="menu-title">Projects</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/projects/list.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">My Projects</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/projects/project.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">View Project</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/projects/targets.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Targets</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/projects/budget.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Budget</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/projects/users.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Users</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/projects/files.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Files</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/projects/activity.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Activity</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/projects/settings.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Settings</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-icon">
													<i class="ki-outline ki-handcart fs-2"></i>
												</span>
												<span class="menu-title">eCommerce</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Catalog</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="apps/ecommerce/catalog/products.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Recordatorios</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->

														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion menu-sub-indention">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Sales</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-accordion">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="apps/ecommerce/sales/listing.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Orders Listing</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="apps/ecommerce/sales/details.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Order Details</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="apps/ecommerce/sales/add-order.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Add Order</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="apps/ecommerce/sales/edit-order.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Edit Order</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion menu-sub-indention">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Customers</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-accordion">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="apps/ecommerce/customers/listing.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Customers Listing</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="apps/ecommerce/customers/details.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Customers Details</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion menu-sub-indention">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Reports</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-accordion">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="apps/ecommerce/reports/view.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Products Viewed</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="apps/ecommerce/reports/sales.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Sales</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="apps/ecommerce/reports/returns.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Returns</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="apps/ecommerce/reports/customer-orders.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Customer Orders</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="apps/ecommerce/reports/shipping.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Shipping</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/ecommerce/settings.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Settings</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-icon">
													<i class="ki-outline ki-chart fs-2"></i>
												</span>
												<span class="menu-title">Support Center</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/support-center/overview.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Overview</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Tickets</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="apps/support-center/tickets/list.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Ticket List</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="apps/support-center/tickets/view.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Ticket View</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Tutorials</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="apps/support-center/tutorials/list.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Tutorials List</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="apps/support-center/tutorials/post.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Tutorials Post</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/support-center/faq.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">FAQ</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/support-center/licenses.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Licenses</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/support-center/contact.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Contact Us</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-icon">
													<i class="ki-outline ki-shield-tick fs-2"></i>
												</span>
												<span class="menu-title">User Management</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Users</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="apps/user-management/users/list.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Users List</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="apps/user-management/users/view.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">View User</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Roles</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="apps/user-management/roles/list.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Roles List</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="apps/user-management/roles/view.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">View Roles</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/user-management/permissions.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Permissions</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-icon">
													<i class="ki-outline ki-phone fs-2"></i>
												</span>
												<span class="menu-title">Contacts</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/contacts/getting-started.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Getting Started</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/contacts/add-contact.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Add Contact</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/contacts/edit-contact.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Edit Contact</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/contacts/view-contact.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">View Contact</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-icon">
													<i class="ki-outline ki-basket fs-2"></i>
												</span>
												<span class="menu-title">Subscriptions</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/subscriptions/getting-started.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Getting Started</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/subscriptions/list.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Subscription List</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/subscriptions/add.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Add Subscription</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/subscriptions/view.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">View Subscription</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-icon">
													<i class="ki-outline ki-briefcase fs-2"></i>
												</span>
												<span class="menu-title">Customers</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/customers/getting-started.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Getting Started</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/customers/list.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Customer Listing</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/customers/view.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Customer Details</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-icon">
													<i class="ki-outline ki-credit-cart fs-2"></i>
												</span>
												<span class="menu-title">Invoice Management</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Profile</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="apps/invoices/view/invoice-1.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Invoice 1</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="apps/invoices/view/invoice-2.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Invoice 2</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="apps/invoices/view/invoice-3.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Invoice 3</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/invoices/create.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Create Invoice</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-icon">
													<i class="ki-outline ki-file-added fs-2"></i>
												</span>
												<span class="menu-title">File Manager</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/file-manager/folders.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Folders</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/file-manager/files.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Files</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/file-manager/blank.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Blank Directory</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/file-manager/settings.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Settings</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-icon">
													<i class="ki-outline ki-sms fs-2"></i>
												</span>
												<span class="menu-title">Inbox</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/inbox/listing.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Messages</span>
														<span class="menu-badge">
															<span class="badge badge-light-success">3</span>
														</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/inbox/compose.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Compose</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/inbox/reply.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">View & Reply</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-icon">
													<i class="ki-outline ki-message-text-2 fs-2"></i>
												</span>
												<span class="menu-title">Chat</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/chat/private.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Private Chat</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/chat/group.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Group Chat</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="apps/chat/drawer.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Drawer Chat</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="apps/calendar.html">
												<span class="menu-icon">
													<i class="ki-outline ki-calendar-8 fs-2"></i>
												</span>
												<span class="menu-title">Calendar</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-title">Help</span>
										<span class="menu-arrow d-lg-none"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/base/utilities" target="_blank" title="Check out over 200 in-house components, plugins and ready for use solutions" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
												<span class="menu-icon">
													<i class="ki-outline ki-rocket fs-2"></i>
												</span>
												<span class="menu-title">Components</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs" target="_blank" title="Check out the complete documentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
												<span class="menu-icon">
													<i class="ki-outline ki-abstract-26 fs-2"></i>
												</span>
												<span class="menu-title">Documentation</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="https://preview.keenthemes.com/metronic8/demo23/layout-builder.html" title="Build your layout and export HTML for server side integration" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
												<span class="menu-icon">
													<i class="ki-outline ki-switch fs-2"></i>
												</span>
												<span class="menu-title">Layout Builder</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" target="_blank">
												<span class="menu-icon">
													<i class="ki-outline ki-code fs-2"></i>
												</span>
												<span class="menu-title">Changelog v8.2.1</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
							</div>
							<!--end::Menu-->
						</div>
						<!--end::Menu wrapper-->
						<!--begin::Logo wrapper-->
						<div class="d-flex align-items-center">
							<!--begin::Logo wrapper-->
							<div class="btn btn-icon btn-color-gray-600 btn-active-color-primary ms-n3 me-2 d-flex d-lg-none" id="kt_app_sidebar_toggle">
								<i class="ki-outline ki-abstract-14 fs-2"></i>
							</div>
							<!--end::Logo wrapper-->
							<!--begin::Logo image-->
							<a href="index.html" class="d-flex d-lg-none">
								<img alt="Logo" src="assets/media/logos/demo23.svg" class="h-60px theme-light-show" />
								<img alt="Logo" src="assets/media/logos/demo23-dark.svg" class="h-60px theme-dark-show" />
							</a>
							<!--end::Logo image-->
						</div>
						<!--end::Logo wrapper-->
						<!--begin::Navbar-->
						<div class="app-navbar flex-shrink-0">

							<div class="app-navbar-item ms-1 ms-lg-3">
								<!--begin::Menu wrapper-->
								<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#kt_modal_add_expense">
									<i class="fa-solid fa-minus"></i>
									Agregar Gasto
								</button>
								<!--end::Menu wrapper-->
							</div>

							<div class="app-navbar-item ms-1 ms-lg-3">
								<!--begin::Menu wrapper-->
								<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#kt_modal_add_sale">
									<i class="fa-solid fa-plus"></i>Agregar Venta
								</button>
								<!--end::Menu wrapper-->
							</div>
							<!--begin::Chat-->
							<div class="app-navbar-item ms-1 ms-lg-3">
								<!--begin::Menu wrapper-->
								<div class="btn btn-icon btn-circle btn-color-gray-500 btn-active-color-primary btn-custom shadow-xs bg-body" id="kt_drawer_chat_toggle">
									<i class="ki-outline ki-message-notif fs-1"></i>
								</div>
								<!--end::Menu wrapper-->
							</div>
							<!--end::Chat-->
							<!--begin::Header menu mobile toggle-->
							<div class="app-navbar-item d-lg-none ms-2 me-n4" title="Show header menu">
								<div class="btn btn-icon btn-color-gray-600 btn-active-color-primary" id="kt_app_header_menu_toggle">
									<i class="ki-outline ki-text-align-left fs-2 fw-bold"></i>
								</div>
							</div>
							<!--end::Header menu mobile toggle-->
						</div>
						<!--end::Navbar-->
					</div>
					<!--end::Header wrapper-->
				</div>
				<!--end::Header container-->
			</div>
			<!--end::Header-->
			<!--begin::Wrapper-->
			<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
				<!--begin::Sidebar-->
				<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="275px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_toggle">
					<!--begin::Logo-->
					<div class="d-flex flex-stack px-4 px-lg-6 py-3 py-lg-8" id="kt_app_sidebar_logo">
						<!--begin::Logo image-->
						<a href="index.html">
							<img alt="Logo" src="assets/media/logos/demo23.svg" class="h-20px h-lg-65px theme-light-show" />
							<img alt="Logo" src="assets/media/logos/demo23-dark.svg" class="h-20px h-lg-65px theme-dark-show" />

						</a>
						<!--end::Logo image-->
						<!--begin::User menu-->
						<div class="ms-3">
							<!--begin::Menu wrapper-->
							<div class="cursor-pointer position-relative symbol symbol-circle symbol-70px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
								<img src="assets/cates_f/IMG_20220807_153850.jpg" alt="user" />
								<div class="position-absolute rounded-circle bg-success start-100 top-100 h-8px w-8px ms-n3 mt-n3">
								</div>
							</div>


							<!--begin::User account menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<div class="menu-content d-flex align-items-center px-3">
										<!--begin::Avatar-->
										<div class="symbol symbol-50px me-5">
											<img alt="Logo" src="assets/cates_f/IMG_20220807_153850.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Username-->
										<div class="d-flex flex-column">
											<div class="fw-bold d-flex align-items-center fs-5">Mileidys Mora
												<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
											</div>
											<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">milemora07@gmail.com</a>
										</div>


										<!--end::Username-->
									</div>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu separator-->
								<div class="separator my-2"></div>
								<!--end::Menu separator-->

								<!--end::Menu separator-->
								<!--begin::Menu item-->
								<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
									<a href="#" class="menu-link px-5">
										<span class="menu-title position-relative">Modo
											<span class="ms-5 position-absolute translate-middle-y top-50 end-0">
												<i class="ki-outline ki-night-day theme-light-show fs-2"></i>
												<i class="ki-outline ki-moon theme-dark-show fs-2"></i>
											</span></span>
									</a>
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-outline ki-night-day fs-2"></i>
												</span>
												<span class="menu-title">Claro</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-outline ki-moon fs-2"></i>
												</span>
												<span class="menu-title">Obscuro</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-outline ki-screen fs-2"></i>
												</span>
												<span class="menu-title">Por defecto</span>
											</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
									<a href="#" class="menu-link px-5">
										<span class="menu-title position-relative">Idioma
											<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">Español
												<img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/spain.svg" alt="" /></span></span>
									</a>
									<!--begin::Menu sub-->
									<div class="menu-sub menu-sub-dropdown w-175px py-4">

										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="account/settings.html" class="menu-link d-flex px-5">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
												</span>Español</a>
										</div>

										<!--end::Menu item-->
									</div>
									<!--end::Menu sub-->
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5 my-1">
									<a href="account/settings.html" class="menu-link px-5">Ajustes de la cuenta</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5">
									<a href="authentication/layouts/corporate/sign-in.html" class="menu-link px-5">Salir</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::User account menu-->
							<!--end::Menu wrapper-->
						</div>
						<!--end::User menu-->
					</div>
					<!--end::Logo-->
					<!--begin::Sidebar nav-->
					<div class="flex-column-fluid px-4 px-lg-8 py-4" id="kt_app_sidebar_nav">
						<!--begin::Nav wrapper-->
						<div id="kt_app_sidebar_nav_wrapper" class="d-flex flex-column hover-scroll-y pe-4 me-n4" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar, #kt_app_sidebar_nav" data-kt-scroll-offset="5px">
							<!--begin::Progress-->
							<div class="d-flex align-items-center flex-column w-100 mb-6">
								<div class="d-flex justify-content-between fw-bolder fs-6 text-gray-800 w-100 mt-auto mb-3">
									<span>Productos en el Principal inventario</span>
								</div>
								<div class="w-100 bg-light-primary rounded mb-2" style="height: 24px">
									<div class="bg-primary rounded" role="progressbar" style="height: 24px; width: 10%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="fw-semibold fs-7 text-primary w-100 mt-auto">
									<span>IA</span>
								</div>
							</div>
							<!--end::Progress-->
							<!--begin::Stats-->
							<div class="d-flex mb-3 mb-lg-6">
								<!--begin::Stat-->
								<div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6">
									<!--begin::Date-->
									<span class="fs-6 text-gray-500 fw-bold">Ingresos (<text id="count_in">?</text>)</span>
									<!--end::Date-->
									<!--begin::Label-->
									<div id="valortotal_in" class="fs-2 fw-bold text-success">Calculando</div>
									<!--end::Label-->
								</div>
								<!--end::Stat-->
								<!--begin::Stat-->
								<div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4">
									<!--begin::Date-->
									<span class="fs-6 text-gray-500 fw-bold">Egresos (<text id="count_eg">?</text>)</span>
									<!--end::Date-->
									<!--begin::Label-->
									<div id="valortotal_eg" class="fs-2 fw-bold text-danger">Calculando</div>
									<!--end::Label-->
								</div>
								<!--end::Stat-->
							</div>

							<script>
								$(document).ready(function() {
									$.ajax({
										url: 'php/st_a_v.php', // Cambia esto por la ruta a tu script PHP
										type: 'GET',
										dataType: 'json',
										success: function(data) {
											// Actualizar los elementos HTML con los datos recibidos
											$('#valortotal_in').text(data.ingresos);
											$('#valortotal_eg').text(data.egresos);
											// Suponiendo que quieres mostrar la cantidad de registros también, necesitarías ajustar tu script PHP para devolver esos valores
											// $('#count_in').text(data.cantidadIngresos);
											// $('#count_eg').text(data.cantidadEgresos);
										},
										error: function(xhr, status, error) {
											console.error("Error al obtener los datos: " + error);
										}
									});
								});
							</script>
							<!--end::Stats-->
							<!--begin::Links-->
							<div class="mb-6">
								<!--begin::Title-->
								<h3 class="text-gray-800 fw-bold mb-8">Servicios</h3>
								<!--end::Title-->
								<!--begin::Row-->
								<div class="row row-cols-3" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
									<!--begin::Col-->
									<div class="col mb-4">
										<!--begin::Link-->
										<a href="apps/ecommerce/catalog/products.html" class="btn btn-icon btn-outline btn-bg-light btn-active-light-primary btn-flex flex-column flex-center w-lg-90px h-lg-90px w-70px h-70px border-gray-200" data-kt-button="true">
											<!--begin::Icon-->
											<span class="mb-2">
												<i class="ki-outline ki-calendar fs-1"></i>
											</span>
											<!--end::Icon-->
											<!--begin::Label-->
											<span class="fs-7 fw-bold">Recordatorios</span>
											<!--end::Label-->
										</a>
										<!--end::Link-->
									</div>
									<!--end::Col-->

									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Links-->
						</div>
						<!--end::Nav wrapper-->
					</div>

					<!--end::Sidebar nav-->
					<!--begin::Footer-->
					<div class="flex-column-auto d-flex flex-center px-4 px-lg-8 py-3 py-lg-8" id="kt_app_sidebar_footer">


						<!--begin::Apps-->
						<div class="app-footer-item me-6">
							<!--begin::Menu- wrapper-->
							<button id="cerrarDia" class="btn btn-danger"> <i class="fa-solid fa-moon"></i> Cerrar Día</button>
							<script>
								document.addEventListener('DOMContentLoaded', function() {
									const cerrarDiaBtn = document.getElementById('cerrarDia');
									const alertaLugar = document.getElementById('alertaLugar');

									function verificarRegistroDelDia() {
										fetch('php/bottonformtode.php')
											.then(response => response.json())
											.then(data => {
												if (data.existe_registro) {
													cerrarDiaBtn.style.display = 'none'; // Ocultar el botón si ya existe un registro
													mostrarAlertaDiaCerrado(); // Mostrar la alerta de día cerrado
													localStorage.setItem('diaCerrado', 'true'); // Almacenar el estado en localStorage
												} else {
													cerrarDiaBtn.style.display = 'inline-block'; // Mostrar el botón si no existe un registro
													ocultarAlertaDiaCerrado(); // Ocultar la alerta de día cerrado
													localStorage.removeItem('diaCerrado'); // Eliminar el estado del localStorage
												}
											})
											.catch(error => console.error('Error:', error));
									}

									// Verificar el registro del día al cargar la página
									verificarRegistroDelDia();

									// Verificar el registro del día cada 5 segundos
									setInterval(verificarRegistroDelDia, 5000);


									cerrarDiaBtn.addEventListener('click', function() {
										Swal.fire({
											html: `¿Estás seguro de que quieres cerrar el día y guardar la ganancia neta?`,
											icon: "warning",
											buttonsStyling: false,
											showCancelButton: true,
											confirmButtonText: "Sí, cerrar día",
											cancelButtonText: 'No, cancelar',
											customClass: {
												confirmButton: "btn btn-primary",
												cancelButton: 'btn btn-danger'
											}
										}).then((result) => {
											if (result.isConfirmed) {
												obtenerGananciaNetaYCerrarDia();
											}
										});
									});

									function obtenerGananciaNetaYCerrarDia() {
										fetch('php/ganancia_neta.php')
											.then(response => response.json())
											.then(data => {
												if (data.ganancia_neta !== undefined) {
													insertarGananciaNeta(data.ganancia_neta);
												} else {
													console.error('No se pudo obtener la ganancia neta');
												}
											})
											.catch(error => console.error('Error:', error));
									}

									function insertarGananciaNeta(gananciaNeta) {
										const datos = new FormData();
										datos.append('ganancia_neta', gananciaNeta);

										fetch('php/insertar_ganancia.php', {
												method: 'POST',
												body: datos
											})
											.then(response => response.json())
											.then(data => {
												if (data.success) {
													Swal.fire({
														title: '¡Día cerrado con éxito!',
														text: 'La ganancia neta ha sido registrada.',
														icon: 'success',
														confirmButtonText: 'Ok'
													});
													cerrarDiaBtn.style.display = 'none'; // Ocultar el botón después de cerrar el día
													mostrarAlertaDiaCerrado(); // Mostrar la alerta de día cerrado
													localStorage.setItem('diaCerrado', 'true'); // Almacenar el estado en localStorage
												} else {
													console.error('Error al insertar en la base de datos:', data.error);
												}
											})
											.catch(error => console.error('Error:', error));
									}

									function mostrarAlertaDiaCerrado() {
										alertaLugar.innerHTML = `
            <div class="alert alert-primary d-flex align-items-center p-5">
                <i class="ki-duotone ki-shield-tick fs-2hx text-success me-4"><span class="path1"></span><span class="path2"></span></i>
                <div class="d-flex flex-column">
                    <h4 class="mb-1 text-dark">Día cerrado</h4>
                    <span>El día ya ha sido cerrado y la ganancia neta ha sido registrada.</span>
                </div>
            </div>
        `;
									}

									function ocultarAlertaDiaCerrado() {
										alertaLugar.innerHTML = '';
									}
								});
							</script>
						</div>
						<!--end::Apps-->
						<!--begin::Quick links-->

						<!--begin::Settings-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Sidebar-->

				<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
					<!--begin::Content wrapper-->
					<div class="d-flex flex-column flex-column-fluid">
						<!--begin::Toolbar-->
						<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-0">
							<!--begin::Toolbar container-->
							<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
								<!--begin::Page title-->
								<div class="page-title d-flex flex-column justify-content-center me-3">

									<!--begin::Title-->
									<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">MI PANADERIA INSUPERABLE</h1>



									<!--end::Title-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">
											<a href="index.html" class="text-muted text-hover-primary">HOME</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-500 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">GESTION</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
								<!--begin::Actions-->
								<div class="d-flex align-items-center gap-2 gap-lg-3">
									<!--begin::Filter menu-->

									<!--end::Filter menu-->
									<!--begin::Secondary button-->
									<!--end::Secondary button-->
									<!--begin::Primary button-->
									<!-- Botón para abrir el modal de Agregar Gasto -->

									<!--end::Primary button-->
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Toolbar container-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Content-->
						<div id="kt_app_content" class="app-content flex-column-fluid">
							<!--begin::Content container-->
							<div id="kt_app_content_container" class="app-container container-xxl">
								<div id="notificacion-container" class="d-none"></div>
								<div class="bekernotis"></div>
								<script>
									$(document).ready(function() {
										$.ajax({
											url: 'php/buscar_ultimo_saldo.php',
											type: 'POST',
											dataType: 'json',
											success: function(response) {
												var notificacionContainer = $('#notificacion-container');
												var notificacionHtml = '';

												if (response.success) {
													if (response.fecha_ultimo_saldo) {
														// Crear el HTML de la notificación para el día sin cerrar
														notificacionHtml = `
            <div class="alert alert-dismissible bg-light-warning d-flex flex-center flex-column py-10 px-10 px-lg-20 mb-10 animate__animated animate__bounceIn">
                <button type="button" class="position-absolute top-0 end-0 m-2 btn btn-icon btn-icon-warning" data-bs-dismiss="alert">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </button>
                <div class="d-flex align-items-center mb-5">
                    <i class="ki-duotone ki-information-5 fs-5tx text-warning me-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                    <h1 class="fw-bold mb-0">Notificación</h1>
                </div>
                <div class="separator separator-dashed border-warning opacity-25 mb-5"></div>
                <div class="mb-9 text-gray-800">
                    <p class="mb-4">${response.mensaje}</p>
                    <ul class="list-unstyled">
                        <li><strong>Fecha:</strong> ${response.fecha_ultimo_saldo}</li>
                        <li><strong>Total de ventas activas:</strong> ${response.totalVentas}</li>
                        <li><strong>Total de gastos:</strong> ${response.totalGastos}</li>
                        <li><strong>Restante:</strong> ${response.restante}</li>
                    </ul>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#" class="btn btn-warning" id="cerrar-dia" data-fecha="${response.fecha_ultimo_saldo}" data-monto="${response.restante}">Cerrar día y traer restante</a>
                </div>
            </div>
        `;
													} else {
														// Crear el HTML de la notificación de éxito
														notificacionHtml = `
            <div class="alert alert-dismissible bg-light-success d-flex flex-center flex-column py-10 px-10 px-lg-20 mb-10">
                <button type="button" class="position-absolute top-0 end-0 m-2 btn btn-icon btn-icon-success" data-bs-dismiss="alert">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </button>
                <div class="d-flex align-items-center mb-5">
                    <i class="ki-duotone ki-check-circle fs-5tx text-success me-4"><span class="path1"></span><span class="path2"></span></i>
                    <h1 class="fw-bold mb-0">Notificación</h1>
                </div>
                <div class="separator separator-dashed border-success opacity-25 mb-5"></div>
                <div class="mb-9 text-gray-800">
                    <p>${response.mensaje}</p>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#" class="btn btn-success" data-bs-dismiss="alert">Entendido</a>
                </div>
            </div>
        `;
													}
												}

												// Agregar el HTML de la notificación al contenedor
												notificacionContainer.html(notificacionHtml);
												// Mostrar el contenedor de la notificación
												notificacionContainer.removeClass('d-none').fadeIn();
											},
											error: function(xhr, status, error) {
												console.log(xhr.responseText);
											}
										});

										// Cerrar la notificación al hacer clic en el botón de cierre
										$(document).on('click', '#notificacion-container .btn-icon', function() {
											$('#notificacion-container').fadeOut(function() {
												$(this).addClass('d-none').empty();
											});
										});

										// Cerrar el día y traer el restante al hacer clic en el botón correspondiente
										// Cerrar el día y traer el restante al hacer clic en el botón correspondiente
										$(document).on('click', '#cerrar-dia', function() {
											var fecha = $(this).data('fecha');
											var monto = $(this).data('monto');

											// Mostrar SweetAlert de confirmación
											Swal.fire({
												title: '¿Estás seguro?',
												text: '¿Deseas cerrar el día ' + fecha + ' y traer el restante de ' + monto + ' al día actual?',
												icon: 'warning',
												showCancelButton: true,
												confirmButtonColor: '#3085d6',
												cancelButtonColor: '#d33',
												confirmButtonText: 'Sí, cerrar día',
												cancelButtonText: 'Cancelar'
											}).then((result) => {
												if (result.isConfirmed) {
													// Realizar la solicitud AJAX para cerrar el día y traer el restante
													$.ajax({
														url: 'php/cerrar_dia.php',
														type: 'POST',
														data: {
															fecha: fecha,
															monto: monto
														},
														dataType: 'json',
														success: function(response) {
															if (response.success) {
																// Mostrar SweetAlert de éxito
																Swal.fire(
																	'¡Día cerrado!',
																	response.mensaje,
																	'success'
																).then(() => {
																	// Cerrar la notificación después de cerrar el día
																	$('#notificacion-container').fadeOut(function() {
																		$(this).addClass('d-none').empty();
																	});
																});
															} else {
																// Mostrar SweetAlert de error
																Swal.fire(
																	'Error',
																	response.mensaje,
																	'error'
																);
															}
														},
														error: function(xhr, status, error) {
															console.log(xhr.responseText);
														}
													});
												}
											});
										});

									});
								</script>
                                <style>
                                    @keyframes entradaDesenfoque {
                                        from {
                                            filter: blur(10px);
                                            opacity: 0;
                                        }
                                        to {
                                            filter: blur(0);
                                            opacity: 1;
                                        }
                                    }

                                    .animacion-desenfoque {
                                        animation: entradaDesenfoque 1s ease-out forwards;
                                    }
                                </style>
								<script>
									// check_day.js

									document.addEventListener('DOMContentLoaded', function() {
										// Realiza la solicitud AJAX al archivo PHP
										fetch('php/get_dayweek.php')
											.then(response => response.json())
											.then(data => {
												// Si la respuesta es exitosa y hoy es sábado
												if (data.success) {
													// Selecciona el div donde se mostrará el mensaje
													var alertDiv = document.querySelector('.bekernotis');
													// Establece el contenido del mensaje con el nuevo diseño de alerta
													alertDiv.innerHTML = `
<div class="alert alert-dismissible bg-light-primary border border-primary d-flex flex-column flex-sm-row p-5 mb-10 animacion-desenfoque">
    <!--begin::Icon-->
    <i class="ki-duotone ki-search-list fs-2hx text-success me-4 mb-5 mb-sm-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
    <!--end::Icon-->

    <!--begin::Wrapper-->
    <div class="d-flex flex-column pe-0 pe-sm-10">
        <!--begin::Title-->
        <h5 class="mb-1">¡Hoy es sabado de Reporte!</h5>
        <!--end::Title-->

        <!--begin::Content-->
        <span>${data.message}</span>
        <!--end::Content-->
    </div>
    <!--end::Wrapper-->
<!-- Botón para lanzar el modal -->
<button type="button" class="btn btn-primary position-absolute position-sm-relative  m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_2">
    Ver
</button>

    <!--end::Close-->
</div>
`;
												}
											})
											.catch(error => console.error('Error:', error));
									});
								</script>
								<div id="alertaLugar"></div>

								<div class="card card-flush h-md-50 mb- mb-xl-10 position-relative ">
									<div class="card-header pt-0">
										<div class="card-title d-flex flex-column">
											<span class="text-gray-500 mt-0 fw-semibold fs-6">Ganancias de hoy</span>
											<div class="d-flex align-items-center">
												<span class="fs-4 fw-semibold text-gray-500 me-1 align-self-start">$</span>
												<span id="restaventas-gastos" class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2 text-success">
													<div id="resultado" aria-live="polite">Cargando...</div>
												</span>
												<span class="badge badge-light-success fs-base"><i id="comparaciondeentrediapasado" class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.2%</span>
											</div>
										</div>
									</div>
									<script>
										document.addEventListener('DOMContentLoaded', function() {
											let valorAnterior = null;

											async function cargarGananciaNeta() {
												try {
													const response = await fetch('php/ganancia_neta.php');
													const data = await response.json();
													const gananciaFormatoCOP = formatearNumeroComoCOP(data.ganancia_neta);
													const resultadoElement = document.getElementById('resultado');

													if (gananciaFormatoCOP !== valorAnterior) {
														// Agregar las clases de animación solo si el valor ha cambiado
														resultadoElement.classList.add('animate__animated', 'animate__rubberBand');

														// Actualizar el contenido después de un breve retraso para permitir que se muestre la animación
														setTimeout(function() {
															resultadoElement.innerHTML = gananciaFormatoCOP;
															valorAnterior = gananciaFormatoCOP;
														}, 100);

														// Eliminar las clases de animación después de que se complete la animación
														setTimeout(function() {
															resultadoElement.classList.remove('animate__animated', 'animate__rubberBand');
														}, 1000);
													}
												} catch (error) {
													console.error('Error:', error);
													document.getElementById('resultado').innerHTML = 'Error al cargar los datos';
												}
											}

											// Función para formatear el número como pesos colombianos
											function formatearNumeroComoCOP(numero) {
												// Asumiendo que 'numero' es un string que representa un número sin formato
												const numeroComoNumero = Number(numero);
												// Verificar si el número es válido
												if (!isNaN(numeroComoNumero)) {
													// Formatear el número como moneda COP
													return numeroComoNumero.toLocaleString('es-CO', {
														style: 'currency',
														currency: 'COP',
														minimumFractionDigits: 0, // Ajustar según se desee la cantidad de decimales
													}).replace('COP', '$').replace(/,/g, '.'); // Reemplazar COP por $ y comas por puntos
												} else {
													return 'Número inválido';
												}
											}

											cargarGananciaNeta();
											setInterval(cargarGananciaNeta, 3000);
										});
									</script>



								</div>
								<!--begin::Row-->
								<div class="row g-5 g-xl-10 mb-xl-10">
									<!--begin::Col-->
									<!--begin::Resumen de gastos-->
									<div class="col-xl-6">
										<!--begin::List widget 5-->
										<div class="card card-flush h-xl-100">
											<!--begin::Header-->
											<div class="card-header pt-7">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bold text-gray-900">Gastos de hoy</span>

												</h3>
												<!--end::Title-->
												<!--begin::Toolbar-->
												<div class="card-toolbar">
													<button type="button" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#gastosModal">
														Ver todos los gastos
													</button>
												</div>


												<!--end::Toolbar-->
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body">
												<!--begin::Scroll-->
												<div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
													<!--begin::Item-->
													<div class="contenedor-gastos"></div>

													<SCRIPT>
														document.addEventListener('DOMContentLoaded', function() {
															actualizarGastos();
															setInterval(actualizarGastos, 3000); // Actualiza los gastos cada 10 segundos
														});

														function actualizarGastos() {
															fetch('php/gastoarray.php')
																.then(response => response.json())
																.then(data => {
																	mostrarGastos(data);
																	mostrarTotalGastos(data);
																})
																.catch(error => console.error('Error:', error));
														}

														let gastosMostrados = []; // Almacena los IDs de los gastos mostrados

														function mostrarGastos(gastos) {
															const contenedor = document.querySelector('.contenedor-gastos');

															// Crear un conjunto con los IDs de los gastos actuales
															const gastosActuales = new Set(gastos.map(gasto => gasto.id));

															// Recorrer los gastos mostrados y eliminar los que ya no están presentes
															gastosMostrados = gastosMostrados.filter(gastoId => {
																if (!gastosActuales.has(gastoId)) {
																	const elemento = contenedor.querySelector(`[data-gasto-id="${gastoId}"]`);
																	if (elemento) {
																		elemento.classList.remove('animate__fadeInRight');
																		elemento.classList.add('animate__bounceOutLeft');
																		elemento.addEventListener('animationend', () => {
																			elemento.remove();
																		});
																	}
																	return false;
																}
																return true;
															});

															gastos.forEach(gasto => {
																// Verifica si el gasto ya fue mostrado
																if (!gastosMostrados.includes(gasto.id)) {
																	const elemento = document.createElement('div');
																	elemento.classList.add('border', 'border-dashed', 'border-gray-300', 'rounded', 'px-7', 'py-3', 'mb-6');
																	elemento.classList.add('animate__animated', 'animate__fadeInRight');
																	elemento.setAttribute('data-gasto-id', gasto.id);
																	elemento.innerHTML = `
                <div class="d-flex flex-stack mb-3">
                    <div class="me-3">
                        <img src="${gasto.imagen}" class="symbol-label w-50px ms-n1 me-1" alt="">
                        <a href="" class="text-gray-800 text-hover-primary fw-bold">${gasto.descripcion}</a>
                    </div>
                </div>
                <div class="d-flex flex-stack">
                    <span class="text-gray-500 fw-bold">Valor:
                        <a href="" class="text-gray-800 text-hover-primary fw-bold">${gasto.monto} COP</a>
                    </span>
                    <span class="badge badge-light-success">${gasto.fecha}</span>

<button onclick="confirmarEliminarGasto(${gasto.id})" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </div>
            `;
																	contenedor.prepend(elemento);
																	gastosMostrados.push(gasto.id);
																}
															});
														}


														function mostrarTotalGastos(gastos) {
															const total = gastos.reduce((acum, gasto) => acum + parseFloat(gasto.monto), 0);
															const contenedorTotal = document.querySelector('.total-gastos');
															contenedorTotal.innerHTML = `Total: ${total.toLocaleString('es-CO', {style: 'currency', currency: 'COP', minimumFractionDigits: 0})}`;
														}
													</SCRIPT>



													<!--end::Item-->
													<!--begin::Item-->

												</div>


												<!--end::Scroll-->
											</div>
                                            <div class="separator my-10"></div>
											<div class="d-flex justify-content-center">
												<div class="fs-4 fw-semibold text-gray-700">
													<div class="total-gastos">suma</div>
												</div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::List widget 5-->
									</div>
									<!--end::Resumen de gastos-->
									<!--begin::Resumen de ventas-->
									<div class="col-xl-6">
										<!--begin::List widget 5-->
										<div class="card card-flush h-xl-100">
											<!--begin::Header-->
											<div class="card-header pt-7">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bold text-gray-900">Ventas de hoy</span>
												</h3>
												<!--end::Title-->
												<!--begin::Toolbar-->
												<button type="button" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#ventasModal">
													Ver todas las ventas
												</button>
												<!--end::Toolbar-->
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body">
												<!--begin::Scroll-->
												<div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
													<!--begin::Item-->
													<div class="contenedor-ventas"></div>
													<script>
														let ventasMostradas = [];

														document.addEventListener('DOMContentLoaded', function() {
															cargarVentas();
															setInterval(cargarVentas, 3000);
														});

														function cargarVentas() {
															fetch('php/ventaarray.php')
																.then(response => response.json())
																.then(data => {
																	mostrarVentas(data);
																	mostrarTotal(data);
																})
																.catch(error => console.error('Error:', error));
														}

														function mostrarVentas(ventas) {
															const contenedor = document.querySelector('.contenedor-ventas');

															// Crear un conjunto con los IDs de las ventas actuales
															const ventasActuales = new Set(ventas.map(venta => venta.id));

															// Recorrer las ventas mostradas y eliminar las que ya no están presentes
															ventasMostradas = ventasMostradas.filter(ventaId => {
																if (!ventasActuales.has(ventaId)) {
																	const elemento = contenedor.querySelector(`[data-venta-id="${ventaId}"]`);
																	if (elemento) {
																		elemento.classList.remove('animate__fadeInRight');
																		elemento.classList.add('animate__bounceOutLeft');
																		elemento.addEventListener('animationend', () => {
																			elemento.remove();
																		});
																	}
																	return false;
																}
																return true;
															});

															ventas.forEach(venta => {
																if (!ventasMostradas.includes(venta.id)) {
																	const elemento = document.createElement('div');
																	elemento.classList.add('border', 'border-dashed', 'border-gray-300', 'rounded', 'px-7', 'py-3', 'mb-6', 'animate__animated', 'animate__fadeInRight');
																	elemento.setAttribute('data-venta-id', venta.id);
																	elemento.innerHTML = `
                <div class="d-flex flex-stack mb-3">
                    <div class="me-3">
                        <a href="" class="text-gray-800 text-hover-primary fw-bold">${venta.descripcion}</a>
                    </div>
                </div>
                <div class="d-flex flex-stack">
                    <span class="text-gray-500 fw-bold">Valor:
                        <a href="" class="text-gray-800 text-hover-primary fw-bold">${venta.monto} COP</a>
                    </span>
                    <span class="text-gray-500 fw-bold">Se recibió en:
                        <a href="" class="text-gray-800 text-hover-primary fw-bold">
                            <span class="badge badge-light-primary">${venta.nombrepago}</span>
                        </a>
                    </span>
                    <span class="badge badge-dark">${venta.fecha}</span>

<button onclick="confirmarEliminarVenta(${venta.id})" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </div>
            `;
																	contenedor.prepend(elemento);
																	ventasMostradas.push(venta.id);
																}
															});
														}

                                                        function mostrarTotal(ventas) {
                                                            let total = 0;
                                                            let totalNequi = 0;
                                                            let totalEfectivo = 0;

                                                            ventas.forEach(venta => {
                                                                const monto = parseFloat(venta.monto);
                                                                total += monto;
                                                                if (venta.nombrepago === 'Nequi') {
                                                                    totalNequi += monto;
                                                                } else if (venta.nombrepago === 'Efectivo') {
                                                                    totalEfectivo += monto;
                                                                }
                                                            });

                                                            mostrarEnContenedor('.total-ventas', total);
                                                            mostrarEnContenedor('.total-nequi', totalNequi);
                                                            mostrarEnContenedor('.total-efectivo', totalEfectivo);
                                                        }

                                                        function mostrarEnContenedor(selector, valor) {
                                                            const contenedor = document.querySelector(selector);
                                                            const valorFormateado = valor.toLocaleString('es-CO', {
                                                                style: 'currency',
                                                                currency: 'COP'
                                                            });
                                                            contenedor.textContent = `${selector.split('-')[1].toUpperCase()}: ${valorFormateado}`;
                                                        }
													</script>



												</div>
												<!--end::Scroll-->
											</div>


                                            <div class="d-flex justify-content-center">
                                                <div class="fs-4 fw-semibold text-gray-700">
                                                    <div class="total-nequi">Total Nequi: </div>
                                                    <div class="total-efectivo">Total Efectivo: </div>
                                                </div>
                                            </div>
                                            <div class="separator my-10"></div>
                                            <div class="d-flex justify-content-center">
                                                <div class="fs-4 fw-semibold text-gray-700">
                                                    <div class="total-ventas">Total Ventas: </div>
                                                </div>
                                            </div>
											<!--end::Body-->
										</div>
										<!--end::List widget 5-->
									</div>
									<!--end::Resumen de ventas-->
									<div class="col-xl-6">
										<!--begin::List widget 5-->
										<div class="card card-flush h-xl-100">
											<!--begin::Header-->
											<div class="card-header pt-7">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bold text-gray-900">Ventas por Confirmar</span>
												</h3>
												<!--end::Title-->
												<!--begin::Toolbar-->
												<!--end::Toolbar-->
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body">
												<!--begin::Scroll-->
												<div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
													<!--begin::Item-->
													<div class="contenedor-ventas-por-confirmar"></div>
													<script>
														let ventasPorConfirmarMostradas = [];

														document.addEventListener('DOMContentLoaded', function() {
															cargarVentasPorConfirmar();
															setInterval(cargarVentasPorConfirmar, 3000);
														});

														function cargarVentasPorConfirmar() {
															fetch('php/ventaarray1.php')
																.then(response => response.json())
																.then(data => {
																	mostrarVentasPorConfirmar(data);
																	mostrarTotalPorConfirmar(data);
																})
																.catch(error => console.error('Error:', error));
														}

														function mostrarVentasPorConfirmar(ventas) {
															const contenedor = document.querySelector('.contenedor-ventas-por-confirmar');

															// Crear un conjunto con los IDs de las ventas actuales
															const ventasActuales = new Set(ventas.map(venta => venta.id));

															// Recorrer las ventas mostradas y eliminar las que ya no están presentes
															ventasPorConfirmarMostradas = ventasPorConfirmarMostradas.filter(ventaId => {
																if (!ventasActuales.has(ventaId)) {
																	const elemento = contenedor.querySelector(`[data-venta-id="${ventaId}"]`);
																	if (elemento) {
																		elemento.classList.remove('animate__fadeInRight');
																		elemento.classList.add('animate__bounceOutLeft');
																		elemento.addEventListener('animationend', () => {
																			elemento.remove();
																		});
																	}
																	return false;
																}
																return true;
															});

															ventas.forEach(venta => {
																if (!ventasPorConfirmarMostradas.includes(venta.id)) {
																	const elemento = document.createElement('div');
																	elemento.classList.add('d-flex', 'align-items-center', 'mb-6', 'animate__animated', 'animate__fadeInRight');
																	elemento.setAttribute('data-venta-id', venta.id);
																	elemento.innerHTML = `
                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>
                <div class="flex-grow-1 me-5">
                    <div class="text-gray-700 fw-semibold fs-6">${venta.descripcion}</div>
                    <div class="text-gray-800 fw-semibold fs-2">${venta.fecha}</div>
                    <div class="text-gray-700 fw-semibold fs-6">Valor: <span class="text-gray-800 fw-semibold fs-2">${venta.monto}</span></div>
                    <div class="text-gray-500 fw-semibold fs-7">Se recibirá en: <span class="badge badge-light-primary">${venta.nombrepago}</span></div>
 <button onclick="confirmarEliminarVenta(${venta.id})" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </div>

                <a href="#" class="btn btn-success confirmar-venta" data-id="${venta.id}"><i class="fa-solid fa-check"></i>Confirmar</a>




            `;
																	contenedor.prepend(elemento);
																	ventasPorConfirmarMostradas.push(venta.id);
																}
															});

															// Agregar evento de clic a los botones "Confirmar"
															const botonesConfirmar = document.querySelectorAll('.confirmar-venta');
															botonesConfirmar.forEach(boton => {
																boton.addEventListener('click', e => {
																	e.preventDefault();
																	const ventaId = boton.dataset.id;
																	confirmarVenta(ventaId);
																});
															});
														}


														function confirmarVenta(ventaId) {
															Swal.fire({
																html: `¿Estás seguro de confirmar esta venta?`,
																icon: "question",
																buttonsStyling: false,
																showCancelButton: true,
																confirmButtonText: "Sí, confirmar",
																cancelButtonText: 'Cancelar',
																customClass: {
																	confirmButton: "btn btn-success",
																	cancelButton: 'btn btn-danger'
																}
															}).then((result) => {
																if (result.isConfirmed) {
																	// Enviar solicitud AJAX a PHP para confirmar la venta
																	fetch(`php/confirmarVenta.php?id=${ventaId}`)
																		.then(response => response.json())
																		.then(data => {
																			if (data.success) {
																				Swal.fire({
																					title: 'Venta confirmada',
																					text: data.message,
																					icon: 'success',
																					buttonsStyling: false,
																					customClass: {
																						confirmButton: "btn btn-primary"
																					}
																				}).then(() => {
																					// Actualizar la lista de ventas por confirmar después de cerrar el SweetAlert
																					cargarVentasPorConfirmar();
																				});
																			} else {
																				Swal.fire({
																					title: 'Error',
																					text: data.message,
																					icon: 'error',
																					buttonsStyling: false,
																					customClass: {
																						confirmButton: "btn btn-primary"
																					}
																				});
																			}
																		})
																		.catch(error => {
																			console.error('Error:', error);
																			Swal.fire({
																				title: 'Error',
																				text: 'Hubo un error al confirmar la venta. Por favor, intenta nuevamente.',
																				icon: 'error',
																				buttonsStyling: false,
																				customClass: {
																					confirmButton: "btn btn-primary"
																				}
																			});
																		});
																}
															});
														}


														function mostrarTotalPorConfirmar(ventas) {
															let total = ventas.reduce((sum, venta) => sum + parseFloat(venta.monto), 0);
															const totalContenedor = document.querySelector('.total-ventas-por-confirmar');
															const totalFormateado = total.toLocaleString('es-CO', {
																style: 'currency',
																currency: 'COP'
															});
															totalContenedor.textContent = `Total Ventas por confirmar: ${totalFormateado}`;
														}
													</script>

												</div>
												<!--end::Scroll-->
											</div>
                                            <div class="separator my-10"></div>
											<div class="d-flex justify-content-center">
												<div class="fs-4 fw-semibold text-gray-700">
													<div class="total-ventas-por-confirmar">suma</div>
												</div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::List widget 5-->
									</div>


									<!--end::Col-->
									<!--begin::Col-->
									<!--end::Col-->
									<!--begin::Col-->

									<!--end::Col-->
								</div>
							</div>
							<!--end::Content container-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Content wrapper-->
					<!--begin::Footer-->
					<div id="kt_app_footer" class="app-footer">
						<!--begin::Footer container-->
						<div class="app-container container-xxl d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
							<!--begin::Copyright-->
							<div class="text-gray-900 order-2 order-md-1">
								<span class="text-muted fw-semibold me-1">Last Update 2024&copy;</span>
								<a target="_blank" class="text-gray-800 text-hover-primary">Beker IA and the context window were build with Beker Team. <div id="contadorRegresivo"><span id="tiempo">10:00</span></div></a>


							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<!--end::Menu-->
						</div>
						<!--end::Footer container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end:::Main-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>


	<!-- Modal para Agregar Venta -->
	<div class="modal fade" id="kt_modal_add_sale" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-dialog-centered mw-650px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header">
					<!--begin::Modal title-->
					<h2>Agregar Venta</h2>
					<!--end::Modal title-->
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<i class="ki-outline ki-cross fs-1"></i>
					</div>
					<!--end::Close-->
				</div>
				<!--end::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body py-lg-10 px-lg-10">
					<!--begin::Form-->
					<form class="form" novalidate="novalidate" id="kt_modal_add_sale_form">
						<!--begin::Input group-->
						<div class="fv-row mb-10">
							<!--begin::Label-->
							<label class="required fs-5 fw-semibold mb-2">Descripción de la Venta</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-lg form-control-solid" name="sale_description" placeholder="Ej: Venta de producto X" value="" />
							<!--end::Input-->
						</div>
						<label class="required fs-5 fw-semibold mb-2">¿Confirmar despues?</label>
						<div class="fv-row mb-10">
							<div class="form-check form-switch form-check-custom form-check-warning form-check-solid">
								<input class="form-check-input " type="checkbox" value="1" id="kt_flexSwitchCustomDefault_1_3" />
								<label class="form-check-label" for="kt_flexSwitchCustomDefault_1_3">
									La venta se registrará, pero no se sumará automáticamente. Debes confirmar después de realizar la venta en estos casos se registra al siguiente dia si ya se ha cerrado.
								</label>
							</div>
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="fv-row mb-10">
							<!--begin::Label-->
							<label class="required fs-5 fw-semibold mb-2">Monto</label>
							<!--end::Label-->
							<!--begin::Input-->

							<input type="number" class="form-control form-control-lg form-control-solid" id="expense_amount" name="sale_amount" placeholder="Ej: 1500" value="" " />
                            <div id=" formatted_amount" class="mt-2">
						</div>
						<!--end::Input-->
				</div>

				<!--begin::Row-->
				<label class="required fs-5 fw-semibold mb-2">Donde está la venta?</label>
				<div id="tipoAlmapaContainer" class="row mw-600px mb-5" data-kt-buttons="true">
					<!-- Las opciones de tipo_almapa se cargarán aquí -->
				</div>
				<!--end::Row-->
				<!--end::Input group-->
				<!--begin::Actions-->
				<div class="d-flex flex-stack pt-10">
					<!--begin::Wrapper-->
					<div>
						<button type="button" class="btn btn-lg btn-light-primary me-3" data-bs-dismiss="modal">
							Cancelar
						</button>
						<!--begin::Submit button-->
						<button type="submit" class="btn btn-lg btn-primary">
							<span class="indicator-label">Guardar</span>
						</button>
						<!--end::Submit button-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Actions-->
				</form>

				<script>
					document.addEventListener("DOMContentLoaded", function() {
						fetch('php/tip_almpa.php')
							.then(response => response.json())
							.then(data => {
								const container = document.getElementById('tipoAlmapaContainer');
								data.forEach(item => {
									const colDiv = document.createElement('div');
									colDiv.className = 'col-4';

									const label = document.createElement('label');
									label.className = 'form-check-image';

									const wrapper = document.createElement('div');
									wrapper.className = 'form-check-wrapper';

									const img = document.createElement('img');
									img.src = item.imagen; // Asegúrate de que la ruta de la imagen sea accesible
									// Los estilos aplicados a las imágenes se definen en CSS

									const divCheck = document.createElement('div');
									divCheck.className = 'form-check form-check-custom form-check-solid me-10';

									const input = document.createElement('input');
									input.className = 'form-check-input';
									input.type = 'radio';
									input.value = item.idalama;
									input.name = 'option2'; // Asegúrate de que el nombre del input sea correcto para tu formulario

									const divCheckLabel = document.createElement('div');
									divCheckLabel.className = 'form-check-label';
									divCheckLabel.textContent = item.nombrepago;

									wrapper.appendChild(img);
									divCheck.appendChild(input);
									divCheck.appendChild(divCheckLabel);
									label.appendChild(wrapper);
									label.appendChild(divCheck);
									colDiv.appendChild(label);
									container.appendChild(colDiv);
								});
							})
							.catch(error => console.error('Error:', error));
					});
				</script>

				<script>
					$(document).ready(function() {
						$('#kt_modal_add_sale_form').submit(function(e) {
							e.preventDefault(); // Evitar que el formulario se envíe de la manera tradicional

							var description = $('input[name="sale_description"]').val();
							var amount = $('input[name="sale_amount"]').val();
							var tip_al = $('input[name="option2"]:checked').val(); // Obtener el valor del tipo de lugar seleccionado
							var estado_venta = $('#kt_flexSwitchCustomDefault_1_3').is(':checked') ? 1 : 0; // Obtener el estado de la venta basado en el checkbox

							$.ajax({
								url: 'php/guardarventas.php',
								type: 'POST',
								data: {
									sale_description: description,
									sale_amount: amount,
									tip_al: tip_al, // Enviar el tipo de lugar seleccionado
									estado_venta: estado_venta // Enviar el estado de la venta
								},
								success: function(response) {
									// Cerrar el modal
									$('#kt_modal_add_sale').modal('hide');
									// Mostrar SweetAlert con la respuesta del servidor
									Swal.fire({
										title: '¡Éxito!',
										text: response,
										icon: 'success',
										confirmButtonText: 'Ok'
									});
								},
								error: function(xhr, status, error) {
									// Manejar errores
									Swal.fire({
										title: 'Error',
										text: "Error al guardar la venta: " + error,
										icon: 'error',
										confirmButtonText: 'Ok'
									});
								}
							});
						});
					});
				</script>

				<!--end::Form-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
	</div>


	<!-- Modal para Agregar Gasto -->
	<div class="modal fade" id="kt_modal_add_expense" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-dialog-centered mw-650px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header">
					<!--begin::Modal title-->
					<h2>Agregar Gasto</h2>
					<!--end::Modal title-->
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<i class="ki-outline ki-cross fs-1"></i>
					</div>
					<!--end::Close-->
				</div>
				<!--end::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body py-lg-10 px-lg-10">
					<!--begin::Form-->
					<form class="form" novalidate="novalidate" id="kt_modal_add_expense_form">
						<!--begin::Input group-->
						<div class="fv-row mb-10">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
								<span class="required">Descripción del Gasto</span>
							</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-lg form-control-solid" name="expense_description" placeholder="Ej: Compra de materiales" value="" />
							<!--end::Input-->
						</div>


						<div class="fv-row mb-10">

							<div class="fv-row">


								<!--begin:Option-->
								<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
									<span class="required">Tipo de gasto</span>
									<i class="ki-outline ki-information-5 text-gray-500 fs-6 ms-1" data-bs-toggle="tooltip" title="Select your app category"></i>
								</label>



								<!--end::Label-->
								<!--begin:Options-->
								<div class="row" id="categorias-container">
									<!-- Las categorías se insertarán aquí -->
								</div>

								<script>
									$(document).ready(function() {
										$.ajax({
											url: 'php/cates.php',
											type: 'get',
											dataType: 'json',
											success: function(response) {
												var len = response.length;
												for (var i = 0; i < len; i++) {
													var id = response[i].id;
													var nombre = response[i].nombre;
													var imagen = response[i].imagen; // Ruta de la imagen
													var categoria = `<div class="col-md-6">
                                    <label class="d-flex flex-stack mb-5 cursor-pointer">
                                        <span class="d-flex align-items-center me-2">
                                            <span class="symbol symbol-50px me-6">
                                                <span class="symbol-label bg-light-primary">
                                                   <img src="${imagen}" alt="${nombre}" class="symbol-label bg-light-primary" style="width: 100%; height: auto;"> <!-- Modificado para mostrar la imagen -->
                                                </span>
                                            </span>
                                            <span class="d-flex flex-column">
                                                <span class="fw-bold fs-6">${nombre}</span>
                                            </span>
                                        </span>
                                        <span class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" type="radio" name="category" value="${id}" />
                                        </span>
                                    </label>
                                </div>`;
													$("#categorias-container").append(categoria);
												}
											}
										});
									});
								</script>
								<!--end:Input-->

								<!--end::Option-->
								<!--begin:Option-->
								<!--end::Option-->
							</div>
							<!--end:Options-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="fv-row mb-10">
							<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
								<span class="required">Monto</span>
							</label>
							<input type="number" class="form-control form-control-lg form-control-solid" id="expense_amountS" name="expense_amountS" placeholder="Ej: 1500" value="" />
							<!-- Elemento para mostrar el monto en pesos colombianos -->
						</div>




						<!--end::Input group-->
						<!--begin::Actions-->
						<div class="d-flex flex-stack pt-10">
							<!--begin::Wrapper-->
							<div>
								<button type="button" class="btn btn-lg btn-light-primary me-3" data-bs-dismiss="modal">
									Cancelar
								</button>
								<!--begin::Submit button-->
								<button type="submit" class="btn btn-lg btn-primary">
									<span class="indicator-label">Guardar</span>
								</button>
								<!--end::Submit button-->
							</div>
							<!--end::Wrapper-->
						</div>

						<script>
							document.getElementById('kt_modal_add_expense_form').addEventListener('submit', function(e) {
								e.preventDefault(); // Evitar el envío tradicional del formulario

								// Capturar los datos del formulario
								var descripcion = document.getElementsByName('expense_description')[0].value;
								var tipoGasto = document.querySelector('input[name="category"]:checked').value;
								var monto = document.getElementById('expense_amountS').value;

								// Preparar los datos para enviar
								var datos = new FormData();
								datos.append('descripcion', descripcion);
								datos.append('tipoGasto', tipoGasto);
								datos.append('monto', monto);

								// Crear la solicitud AJAX
								var xhr = new XMLHttpRequest();
								xhr.open('POST', 'php/guardarGasto.php', true);
								xhr.onload = function() {
									if (this.status === 200) {
										// Utilizar la respuesta de PHP en SweetAlert
										Swal.fire({
											title: 'Registro guardado',
											text: this.responseText, // Aquí se muestra la respuesta de PHP
											icon: 'success',
											confirmButtonText: 'Ok'
										});
										// Aquí puedes agregar acciones adicionales tras el éxito del envío
									}
								};
								xhr.send(datos);
							});
						</script>
						<!--end::Actions-->
					</form>
					<!--end::Form-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>

	<!--end::App-->
	<!--begin::Drawers-->
	<!--begin::Activities drawer-->
	<div class="modal fade" id="gastosModal" tabindex="-1" aria-labelledby="gastosModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="gastosModalLabel">Todos los Gastos</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<!-- Aquí irá la tabla con los gastos -->
					<div class="table-responsive">
						<table class="table table-row-dashed table-row-gray-300 gy-7" id="gastosTable">
							<thead>

							</thead>
							<tbody>
								<!-- The expenses will be loaded here -->
							</tbody>
						</table>

					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>

		<script>
			document.addEventListener('DOMContentLoaded', function() {
				$('#gastosModal').on('show.bs.modal', function(event) {
					fetch('php/tables_gastos.php')
						.then(response => response.json())
						.then(data => actualizarTablaGastos(data))
						.catch(error => console.error('Error:', error));
				});
			});

			function formatearFecha(fecha) {
				const fechaObj = new Date(fecha);
				fechaObj.setMinutes(fechaObj.getMinutes() + fechaObj.getTimezoneOffset()); // Ajuste de zona horaria
				const options = {
					day: 'numeric',
					month: 'long'
				};
				return new Intl.DateTimeFormat('es-ES', options).format(fechaObj);
			}


			function formatearMonto(monto) {
				return monto.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
			}

			function agruparGastosPorFecha(gastos) {
				const gastosPorFecha = {};
				gastos.forEach(gasto => {
					if (!gastosPorFecha[gasto.fecha]) {
						gastosPorFecha[gasto.fecha] = [];
					}
					gastosPorFecha[gasto.fecha].push(gasto);
				});
				return gastosPorFecha;
			}


			function actualizarTablaGastos(gastos) {
				const gastosTable = document.querySelector('#gastosTable');
				// Limpiar el contenedor de gastos antes de agregar nuevos datos
				gastosTable.innerHTML = '';

				// Agrupar los gastos por fecha
				const gastosPorFecha = gastos.reduce((acc, gasto) => {
					const fecha = formatearFecha(gasto.fecha);
					if (!acc[fecha]) {
						acc[fecha] = [];
					}
					acc[fecha].push(gasto);
					return acc;
				}, {});

				// Mostrar los gastos agrupados por fecha en cards separadas
				Object.entries(gastosPorFecha).forEach(([fecha, gastosEnFecha]) => {
					const card = document.createElement('div');
					card.classList.add('card', 'mb-4');
					card.innerHTML = `
            <div class="card-header">
                <h3>${fecha}</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>

                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        `;

					const cardBody = card.querySelector('.card-body tbody');

					gastosEnFecha.forEach(gasto => {
						const tr = document.createElement('tr');
						tr.innerHTML = `
                <td>${gasto.id}</td>
                <td>${gasto.descripcion}</td>
                <td>${formatearMonto(parseFloat(gasto.monto))}</td>
                <td>
                    <button onclick="editarGasto(${gasto.id})" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button onclick="confirmarEliminarGasto(${gasto.id})" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </td>
            `;
						cardBody.appendChild(tr);
					});

					gastosTable.appendChild(card);
				});
			}


			function confirmarEliminarGasto(idGasto) {
				Swal.fire({
					html: `¿Estás seguro de que deseas eliminar este gasto? Esta acción no se puede deshacer.`,
					icon: "warning",
					buttonsStyling: false,
					showCancelButton: true,
					confirmButtonText: "Sí, eliminarlo!",
					cancelButtonText: 'No, cancelar',
					customClass: {
						confirmButton: "btn btn-danger",
						cancelButton: 'btn btn-secondary'
					}
				}).then((result) => {
					if (result.isConfirmed) {
						eliminarGasto(idGasto);
					}
				});
			}

			function eliminarGasto(idGasto) {
				$.ajax({
					type: "POST",
					url: 'php/elim_gasto.php',
					data: {
						id: idGasto
					},
					success: function(response) {
						// Maneja una respuesta exitosa
						Swal.fire({
							html: `El gasto ha sido eliminado correctamente.`,
							icon: "success",
							buttonsStyling: false,
							confirmButtonText: "Ok, entendido",
							customClass: {
								confirmButton: "btn btn-primary"
							}
						});
						// Opcional: Eliminar la fila de la tabla o recargar la tabla
					},
					error: function(xhr, status, error) {
						// Maneja un error
						Swal.fire({
							html: `No se pudo eliminar el gasto. Por favor, inténtalo de nuevo.`,
							icon: "error",
							buttonsStyling: false,
							confirmButtonText: "Ok, entendido",
							customClass: {
								confirmButton: "btn btn-primary"
							}
						});
					}
				});
			}

			function editarGasto(idGasto) {
				fetch(`php/obtener_gasto.php?id=${idGasto}`)
					.then(response => response.json())
					.then(gasto => {
						document.getElementById('editarGastoId').value = gasto.id;
						document.getElementById('editarGastoFecha').value = gasto.fecha;
						document.getElementById('editarGastoDescripcion').value = gasto.descripcion;
						document.getElementById('editarGastoMonto').value = gasto.monto;
						$('#editarGastoModal').modal('show');
					})
					.catch(error => console.error('Error:', error));
			}
		</script>
	</div>
	<div class="modal fade" id="editarGastoModal" tabindex="-1" aria-labelledby="editarGastoModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="editarGastoModalLabel">Editar Gasto</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form id="editarGastoForm">
						<input type="hidden" id="editarGastoId" name="id">
						<div class="mb-3">
							<label for="editarGastoFecha" class="form-label">Fecha</label>
							<input type="date" class="form-control" id="editarGastoFecha" name="fecha" required>
						</div>
						<div class="mb-3">
							<label for="editarGastoDescripcion" class="form-label">Descripción</label>
							<input type="text" class="form-control" id="editarGastoDescripcion" name="descripcion" required>
						</div>
						<div class="mb-3">
							<label for="editarGastoMonto" class="form-label">Monto</label>
							<input type="number" step="0.01" class="form-control" id="editarGastoMonto" name="monto" required>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
					<button type="button" class="btn btn-primary" id="guardarCambiosGasto">Guardar Cambios</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="ventasModal" tabindex="-1" aria-labelledby="ventasModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="ventasModalLabel">Todas las ventas</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<!-- Aquí irá la tabla con las ventas -->
					<div class="table-responsive">
						<table class="table align-middle table-row-dashed fs-6 gy-5" id="ventasTableBody">
							<tbody>
								<!-- Las ventas se cargarán aquí -->
							</tbody>
						</table>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>

	<script>
		document.addEventListener('DOMContentLoaded', function() {
			$('#ventasModal').on('show.bs.modal', function(event) {
				fetch('php/tables_ventas.php')
					.then(response => response.json())
					.then(data => actualizarTablaVentasAgrupadas(data))
					.catch(error => console.error('Error:', error));
			});
		});

		function formatearFechaVentas(fecha) {
			// Asumiendo que 'fecha' es una instancia de Date o una cadena de fecha ISO 8601
			// Si 'fecha' es una cadena, primero conviértela a una instancia de Date
			const fechaObj = new Date(fecha);

			// Agregar un día a la fecha
			fechaObj.setDate(fechaObj.getDate() + 1);

			// Utilizar Intl.DateTimeFormat para formatear la fecha
			const opciones = {
				year: 'numeric',
				month: 'long',
				day: 'numeric'
			};
			return new Intl.DateTimeFormat('es', opciones).format(fechaObj);
		}



		function formatearMontoVentas(monto) {
			return monto.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
		}

		function actualizarTablaVentasAgrupadas(ventas) {
			const ventasTableBody = document.querySelector('#ventasTableBody');
			// Limpiar el contenedor de ventas antes de agregar nuevos datos
			ventasTableBody.innerHTML = '';

			// Agrupar las ventas por fecha
			const ventasPorFecha = ventas.reduce((acc, venta) => {
				const fecha = formatearFechaVentas(venta.fecha);
				if (!acc[fecha]) {
					acc[fecha] = [];
				}
				acc[fecha].push(venta);
				return acc;
			}, {});

			// Mostrar las ventas agrupadas por fecha en cards separadas
			Object.entries(ventasPorFecha).forEach(([fecha, ventasEnFecha]) => {
				const card = document.createElement('div');
				card.classList.add('card', 'mb-4');
				card.innerHTML = `
            <div class="card-header">
                <h3>${fecha}</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>

                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        `;

				const cardBodyTbody = card.querySelector('.card-body tbody');

				ventasEnFecha.forEach(venta => {
					const tr = document.createElement('tr');
					tr.innerHTML = `
                <td>${venta.id}</td>
                <td>${venta.descripcion}</td>
                <td>${formatearMontoVentas(parseFloat(venta.monto))}</td>
                <td>
                    <button onclick="editarVenta(${venta.id})" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button onclick="confirmarEliminarVenta(${venta.id})" class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </td>
            `;
					cardBodyTbody.appendChild(tr);
				});

				ventasTableBody.appendChild(card);
			});
		}



		function confirmarEliminarVenta(idVenta) {
			Swal.fire({
				html: `¿Estás seguro de que deseas eliminar esta venta? Esta acción no se puede deshacer.`,
				icon: "warning",
				buttonsStyling: false,
				showCancelButton: true,
				confirmButtonText: "Sí, eliminarla!",
				cancelButtonText: 'No, cancelar',
				customClass: {
					confirmButton: "btn btn-danger",
					cancelButton: 'btn btn-secondary'
				}
			}).then((result) => {
				if (result.isConfirmed) {
					eliminarVenta(idVenta);
				}
			});
		}

		function eliminarVenta(idVenta) {
			$.ajax({
				type: "POST",
				url: 'php/elim_venta.php', // Asegúrate de ajustar esta URL
				data: {
					id: idVenta
				},
				success: function(response) {
					Swal.fire({
						html: `La venta ha sido eliminada correctamente.`,
						icon: "success",
						buttonsStyling: false,
						confirmButtonText: "Ok, entendido",
						customClass: {
							confirmButton: "btn btn-primary"
						}
					});
					// Opcional: Eliminar la fila de la tabla o recargar la tabla
				},
				error: function(xhr, status, error) {
					Swal.fire({
						html: `No se pudo eliminar la venta. Por favor, inténtalo de nuevo.`,
						icon: "error",
						buttonsStyling: false,
						confirmButtonText: "Ok, entendido",
						customClass: {
							confirmButton: "btn btn-primary"
						}
					});
				}
			});
		}
	</script>


	<div class="modal bg-body fade" tabindex="-1" id="kt_modal_2">
		<div class="modal-dialog modal-fullscreen">
			<div class="modal-content shadow-none">
				<div class="modal-header">
					<h5 class="modal-title">Reportes Semanales de Gastos y Ventas</h5>
					<!--begin::Close-->
					<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
						<i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
					</div>
					<!--end::Close-->
				</div>

				<div class="modal-body">
					<!-- Aquí comienza el contenido del cuerpo del modal -->
					<div class="row">
						<!-- Reporte de Gastos -->
						<div class="col-md-6">
							<div class="card card-bordered">
								<div class="card-body">
									<div id="kt_amcharts_gastos_semanales" style="height: 500px;"></div>
									<div id="kt_amcharts_gastos_semanales_legend" class="mt-5"></div>
								</div>
							</div>
							<script>
								am5.ready(function() {
									// Create root element
									var rootGastosSemanales = am5.Root.new("kt_amcharts_gastos_semanales");

									// Set themes
									rootGastosSemanales.setThemes([
										am5themes_Animated.new(rootGastosSemanales)
									]);

									// Create chart
									var chartGastosSemanales = rootGastosSemanales.container.children.push(am5percent.PieChart.new(rootGastosSemanales, {
										layout: rootGastosSemanales.verticalLayout
									}));

									// Create series
									var seriesGastosSemanales = chartGastosSemanales.series.push(am5percent.PieSeries.new(rootGastosSemanales, {
										alignLabels: true,
										calculateAggregates: true,
										valueField: "value",
										categoryField: "category"
									}));

									seriesGastosSemanales.slices.template.setAll({
										strokeWidth: 3,
										stroke: am5.color(0xffffff)
									});

									seriesGastosSemanales.labels.template.setAll({
										maxWidth: 100,
										oversizedBehavior: "wrap",
										fontSize: 12,
										textAlign: "center",
										centerX: am5.p50,
										centerY: am5.p100,
										paddingBottom: 10
									});

									seriesGastosSemanales.ticks.template.setAll({
										forceHidden: true
									});

									// Create legend
									var legendGastosSemanales = chartGastosSemanales.children.push(am5.Legend.new(rootGastosSemanales, {
										centerX: am5.p50,
										x: am5.p50,
										marginTop: 15,
										marginBottom: 15
									}));

									legendGastosSemanales.data.setAll(seriesGastosSemanales.dataItems);

									// Create total label
									var totalLabel = chartGastosSemanales.seriesContainer.children.push(am5.Label.new(rootGastosSemanales, {
										textAlign: "center",
										centerY: am5.p50,
										centerX: am5.p50,
										text: "[fontSize:18px]Total:[/]\n[bold fontSize:30px] {total}[/]"
									}));

									// Realizar la solicitud AJAX para obtener los datos de gastos semanales
									fetch('php/fetch_gastos.php')
										.then(response => response.json())
										.then(data => {
											// Calcular el total de gastos
											var total = data.reduce((sum, item) => sum + parseFloat(item.total), 0);

											// Actualizar los datos del gráfico con los resultados obtenidos
											seriesGastosSemanales.data.setAll(data.map(item => ({
												value: parseFloat(item.total),
												category: item.categoria
											})));

											// Actualizar el texto de la etiqueta de total
											totalLabel.set("text", totalLabel.get("text").replace("{total}", total.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",")));

											// Play initial series animation
											seriesGastosSemanales.appear(1000, 100);
										})
										.catch(error => {
											console.error('Error al obtener los datos de gastos semanales:', error);
										});
								}); // end am5.ready()
							</script>
							<div id="resumen-gastos">
								<h4>Reporte de Gastos</h4>
								<p>Resumen de los gastos realizados durante la semana:</p>
								<div id="gastos-diarios"></div>
							</div>


							<script>
								document.addEventListener('DOMContentLoaded', function() {
									// Realizar la solicitud AJAX al cargar la página
									var xhr = new XMLHttpRequest();
									xhr.onreadystatechange = function() {
										if (xhr.readyState === XMLHttpRequest.DONE) {
											if (xhr.status === 200) {
												var gastosPorDia = JSON.parse(xhr.responseText);
												mostrarGastosPorDia(gastosPorDia);
											} else {
												console.error('Error en la solicitud AJAX');
											}
										}
									};
									xhr.open('GET', 'php/resumen_gastos.php', true);
									xhr.send();
								});

								function mostrarGastosPorDia(gastosPorDia) {
									var gastosDiariosDiv = document.getElementById('gastos-diarios');
									var html = '';

									for (var dia in gastosPorDia) {
										if (gastosPorDia.hasOwnProperty(dia)) {
											var gastos = gastosPorDia[dia];
											var totalGastos = 0;

											html += '<h4>' + dia + '</h4>';
											html += '<ul>';

											for (var i = 0; i < gastos.length; i++) {
												var gasto = gastos[i];
												html += '<li>' + gasto.descripcion + ': $' + gasto.monto + '</li>';
												totalGastos += parseFloat(gasto.monto);
											}

											html += '</ul>';
											html += '<p>Total gastos del día: $' + totalGastos.toFixed(2) + '</p>';
											html += '<hr>';
										}
									}

									gastosDiariosDiv.innerHTML = html;
								}
							</script>
							<!-- Aquí puedes insertar una tabla o lista con los gastos -->
						</div>
						<!-- Reporte de Ventas -->
						<div class="col-md-6">
							<div class="card card-bordered">
								<div class="card-body">
									<div id="kt_amcharts_ventas_semanales" style="height: 500px;"></div>
								</div>
							</div>
							<script>
								am5.ready(function() {
									var root = am5.Root.new("kt_amcharts_ventas_semanales");

									root.setThemes([
										am5themes_Animated.new(root)
									]);

									var chart = root.container.children.push(am5xy.XYChart.new(root, {
										panX: true,
										panY: true,
										wheelX: "panX",
										wheelY: "zoomX",
										pinchZoomX: true
									}));

									var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
									cursor.lineY.set("visible", false);

									var xRenderer = am5xy.AxisRendererX.new(root, {
										minGridDistance: 30
									});
									xRenderer.labels.template.setAll({
										rotation: -90,
										centerY: am5.p50,
										centerX: am5.p100,
										paddingRight: 15
									});

									var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
										maxDeviation: 0.3,
										categoryField: "dia",
										renderer: xRenderer,
										tooltip: am5.Tooltip.new(root, {})
									}));

									var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
										maxDeviation: 0.3,
										renderer: am5xy.AxisRendererY.new(root, {})
									}));

									var series = chart.series.push(am5xy.ColumnSeries.new(root, {
										name: "Ventas",
										xAxis: xAxis,
										yAxis: yAxis,
										valueYField: "total",
										sequencedInterpolation: true,
										categoryXField: "dia",
										tooltip: am5.Tooltip.new(root, {
											labelText: "[bold]{name}[/]: {valueY}"
										})
									}));

									series.columns.template.setAll({
										cornerRadiusTL: 5,
										cornerRadiusTR: 5
									});
									series.columns.template.adapters.add("fill", function(fill, target) {
										return chart.get("colors").getIndex(series.columns.indexOf(target));
									});

									series.columns.template.adapters.add("stroke", function(stroke, target) {
										return chart.get("colors").getIndex(series.columns.indexOf(target));
									});

									// Cargar datos desde el archivo PHP
									fetch('php/fetch_ventas.php')
										.then(response => response.json())
										.then(data => {
											xAxis.data.setAll(data);
											series.data.setAll(data);
										})
										.catch(error => {
											console.error('Error al obtener los datos de ventas diarias:', error);
										});

									var legend = chart.children.push(am5.Legend.new(root, {
										centerX: am5.p50,
										x: am5.p50
									}));

									legend.data.setAll(chart.series.values);

									chart.appear(1000, 100);
								});
							</script>

							<div id="resumen-ventas">
								<h4>Reporte de Ventas</h4>
								<p>Resumen de las ventas realizadas durante la semana:</p>
								<div id="ventas-diariassss"></div>
							</div>

							<script>
								document.addEventListener('DOMContentLoaded', function() {
									// Realizar la solicitud AJAX al cargar la página
									var xhr = new XMLHttpRequest();
									xhr.onreadystatechange = function() {
										if (xhr.readyState === XMLHttpRequest.DONE) {
											if (xhr.status === 200) {
												var ventasPorDia = JSON.parse(xhr.responseText);
												mostrarVentasPorDia(ventasPorDia);
											} else {
												console.error('Error en la solicitud AJAX');
											}
										}
									};
									xhr.open('GET', 'php/resumen_ventas_semanales.php', true);
									xhr.send();
								});

								function mostrarVentasPorDia(ventasPorDia) {
									var ventasDiariasDiv = document.getElementById('ventas-diariassss');
									var html = '';

									for (var dia in ventasPorDia) {
										if (ventasPorDia.hasOwnProperty(dia)) {
											var ventas = ventasPorDia[dia];
											var totalVentas = 0;

											html += '<h4>' + dia + '</h4>';
											html += '<ul>';

											for (var i = 0; i < ventas.length; i++) {
												var venta = ventas[i];
												html += '<li>' + venta.descripcion + ': $' + venta.monto + '</li>';
												totalVentas += parseFloat(venta.monto);
											}

											html += '</ul>';
											html += '<p>Total ventas del día: $' + totalVentas.toFixed(2) + '</p>';
											html += '<hr>';
										}
									}

									ventasDiariasDiv.innerHTML = html;
								}
							</script>
						</div>
					</div>
					<!-- Aquí termina el contenido del cuerpo del modal -->
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-primary" onclick="imprimirModal()">Imprimir</button>
				</div>
				<script>
					function imprimirModal() {
						var modalContent = document.querySelector('.modal-content');
						var ventanaImpresion = window.open('', '_blank');
						ventanaImpresion.document.open();
						ventanaImpresion.document.write('<html><head><title>Imprimir Modal</title>');
						ventanaImpresion.document.write('<link rel="stylesheet" href="ruta/a/tu/archivo.css">');
						ventanaImpresion.document.write('</head><body>');
						ventanaImpresion.document.write(modalContent.innerHTML);
						ventanaImpresion.document.write('</body></html>');
						ventanaImpresion.document.close();
						ventanaImpresion.print();
					}
				</script>
			</div>
		</div>
	</div>



	<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
		<div class="card shadow-none border-0 rounded-0">
			<!--begin::Header-->
			<div class="card-header" id="kt_activities_header">
				<h3 class="card-title fw-bold text-gray-900">Activity Logs</h3>
				<div class="card-toolbar">
					<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
						<i class="ki-outline ki-cross fs-1"></i>
					</button>
				</div>
			</div>
			<!--end::Header-->
			<!--begin::Body-->
			<div class="card-body position-relative" id="kt_activities_body">
				<!--begin::Content-->
				<div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">
					<!--begin::Timeline items-->
					<div class="timeline timeline-border-dashed">
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon">
								<i class="ki-outline ki-message-text-2 fs-2 text-gray-500"></i>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile
										App” project:</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
											<img src="assets/media/avatars/300-14.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
								<!--begin::Timeline details-->
								<div class="overflow-auto pb-5">
									<!--begin::Record-->
									<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
										<!--begin::Title-->
										<a href="apps/projects/project.html" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Meeting
											with customer</a>
										<!--end::Title-->
										<!--begin::Label-->
										<div class="min-w-175px pe-2">
											<span class="badge badge-light text-muted">Application Design</span>
										</div>
										<!--end::Label-->
										<!--begin::Users-->
										<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<img src="assets/media/avatars/300-2.jpg" alt="img" />
											</div>
											<!--end::User-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<img src="assets/media/avatars/300-14.jpg" alt="img" />
											</div>
											<!--end::User-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">
													A</div>
											</div>
											<!--end::User-->
										</div>
										<!--end::Users-->
										<!--begin::Progress-->
										<div class="min-w-125px pe-2">
											<span class="badge badge-light-primary">In Progress</span>
										</div>
										<!--end::Progress-->
										<!--begin::Action-->
										<a href="apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
										<!--end::Action-->
									</div>
									<!--end::Record-->
									<!--begin::Record-->
									<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
										<!--begin::Title-->
										<a href="apps/projects/project.html" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Project
											Delivery Preparation</a>
										<!--end::Title-->
										<!--begin::Label-->
										<div class="min-w-175px">
											<span class="badge badge-light text-muted">CRM System Development</span>
										</div>
										<!--end::Label-->
										<!--begin::Users-->
										<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<img src="assets/media/avatars/300-20.jpg" alt="img" />
											</div>
											<!--end::User-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">
													B</div>
											</div>
											<!--end::User-->
										</div>
										<!--end::Users-->
										<!--begin::Progress-->
										<div class="min-w-125px">
											<span class="badge badge-light-success">Completed</span>
										</div>
										<!--end::Progress-->
										<!--begin::Action-->
										<a href="apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
										<!--end::Action-->
									</div>
									<!--end::Record-->
								</div>
								<!--end::Timeline details-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon me-4">
								<i class="ki-outline ki-flag fs-2 text-gray-500"></i>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n2">
								<!--begin::Timeline heading-->
								<div class="overflow-auto pe-3">
									<!--begin::Title-->
									<div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that
										speak human workshop</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
											<img src="assets/media/avatars/300-1.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon">
								<i class="ki-outline ki-disconnect fs-2 text-gray-500"></i>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="mb-5 pe-3">
									<!--begin::Title-->
									<a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New
										Incoming Project Files:</a>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
											<img src="assets/media/avatars/300-23.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
								<!--begin::Timeline details-->
								<div class="overflow-auto pb-5">
									<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
										<!--begin::Item-->
										<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
											<!--begin::Icon-->
											<img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
											<!--end::Icon-->
											<!--begin::Info-->
											<div class="ms-1 fw-semibold">
												<!--begin::Desc-->
												<a href="apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App
													Guidelines</a>
												<!--end::Desc-->
												<!--begin::Number-->
												<div class="text-gray-500">1.9mb</div>
												<!--end::Number-->
											</div>
											<!--begin::Info-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
											<!--begin::Icon-->
											<img alt="apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
											<!--end::Icon-->
											<!--begin::Info-->
											<div class="ms-1 fw-semibold">
												<!--begin::Desc-->
												<a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing
													Results</a>
												<!--end::Desc-->
												<!--begin::Number-->
												<div class="text-gray-500">18kb</div>
												<!--end::Number-->
											</div>
											<!--end::Info-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-aligns-center">
											<!--begin::Icon-->
											<img alt="apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg" />
											<!--end::Icon-->
											<!--begin::Info-->
											<div class="ms-1 fw-semibold">
												<!--begin::Desc-->
												<a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
												<!--end::Desc-->
												<!--begin::Number-->
												<div class="text-gray-500">20mb</div>
												<!--end::Number-->
											</div>
											<!--end::Icon-->
										</div>
										<!--end::Item-->
									</div>
								</div>
								<!--end::Timeline details-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon">
								<i class="ki-outline ki-abstract-26 fs-2 text-gray-500"></i>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-semibold mb-2">Task
										<a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
										<a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin
										Dashboard project:
									</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
											<img src="assets/media/avatars/300-14.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon">
								<i class="ki-outline ki-pencil fs-2 text-gray-500"></i>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
											<img src="assets/media/avatars/300-2.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
								<!--begin::Timeline details-->
								<div class="overflow-auto pb-5">
									<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
										<!--begin::Item-->
										<div class="overlay me-10">
											<!--begin::Image-->
											<div class="overlay-wrapper">
												<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
											</div>
											<!--end::Image-->
											<!--begin::Link-->
											<div class="overlay-layer bg-dark bg-opacity-10 rounded">
												<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
											</div>
											<!--end::Link-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="overlay me-10">
											<!--begin::Image-->
											<div class="overlay-wrapper">
												<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
											</div>
											<!--end::Image-->
											<!--begin::Link-->
											<div class="overlay-layer bg-dark bg-opacity-10 rounded">
												<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
											</div>
											<!--end::Link-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="overlay">
											<!--begin::Image-->
											<div class="overlay-wrapper">
												<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
											</div>
											<!--end::Image-->
											<!--begin::Link-->
											<div class="overlay-layer bg-dark bg-opacity-10 rounded">
												<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
											</div>
											<!--end::Link-->
										</div>
										<!--end::Item-->
									</div>
								</div>
								<!--end::Timeline details-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon">
								<i class="ki-outline ki-sms fs-2 text-gray-500"></i>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-semibold mb-2">New case
										<a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in
										Multi-platform Database Design project
									</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="overflow-auto pb-5">
										<!--begin::Wrapper-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
											<!--end::User-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon">
								<i class="ki-outline ki-pencil fs-2 text-gray-500"></i>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
											<img src="assets/media/avatars/300-4.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
								<!--begin::Timeline details-->
								<div class="overflow-auto pb-5">
									<!--begin::Notice-->
									<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
										<!--begin::Icon-->
										<i class="ki-outline ki-devices-2 fs-2tx text-primary me-4"></i>
										<!--end::Icon-->
										<!--begin::Wrapper-->
										<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
											<!--begin::Content-->
											<div class="mb-3 mb-md-0 fw-semibold">
												<h4 class="text-gray-900 fw-bold">Database Backup Process Completed!
												</h4>
												<div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make
													sure the data integrity is OK</div>
											</div>
											<!--end::Content-->
											<!--begin::Action-->
											<a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
											<!--end::Action-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Notice-->
								</div>
								<!--end::Timeline details-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon">
								<i class="ki-outline ki-basket fs-2 text-gray-500"></i>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-semibold mb-2">New order
										<a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow
										Planning & Budget Estimation
									</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
					</div>
					<!--end::Timeline items-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Body-->
			<!--begin::Footer-->
			<div class="card-footer py-5 text-center" id="kt_activities_footer">
				<a href="pages/user-profile/activity.html" class="btn btn-bg-body text-primary">View All Activities
					<i class="ki-outline ki-arrow-right fs-3 text-primary"></i></a>
			</div>
			<!--end::Footer-->
		</div>
	</div>
	<!--end::Activities drawer-->
	<!--begin::Chat drawer-->
	<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
		<!--begin::Messenger-->
		<div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
			<!--begin::Card header-->
			<div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
				<!--begin::Title-->
				<div class="card-title">
					<!--begin::User-->
					<div class="d-flex justify-content-center flex-column me-3">
						<a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Beker (Gemini)</a>
						<!--begin::Info-->
						<div class="mb-0 lh-1">
							<span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
							<span class="fs-7 fw-semibold text-muted">Activo</span>
						</div>
						<!--end::Info-->
					</div>
					<!--end::User-->
				</div>
				<!--end::Title-->
				<!--begin::Card toolbar-->
				<!--end::Card toolbar-->
			</div>
			<!--end::Card header-->
			<!--begin::Card body-->
			<div class="card-body" id="kt_drawer_chat_messenger_body">
				<!--begin::Messages-->
				<div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
					<!-- Messages will be dynamically added here -->
				</div>
				<!--end::Messages-->
			</div>
			<!--end::Card body-->
			<!--begin::Card footer-->
			<div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
				<!--begin::Input-->
				<textarea class="form-control form-control-flush mb-3" rows="1" id="message_input" placeholder="Escribe algo para preguntar"></textarea>
				<!--end::Input-->
				<!--begin:Toolbar-->
				<div class="d-flex flex-stack">
					<!--begin::Actions-->
					<div class="d-flex align-items-center me-2">
						<!-- Placeholder for future development -->
					</div>
					<!--end::Actions-->
					<!--begin::Send-->
					<button class="btn btn-primary" id="send_button" type="button">Enviar</button>
					<!--end::Send-->
				</div>
				<!--end::Toolbar-->
			</div>
			<!--end::Card footer-->

			<script type="module">
				import {
					GoogleGenerativeAI
				} from "@google/generative-ai";

				const API_KEY = "AIzaSyAW-8QMNAaa_VvjDWkgT3Q60BB0pSHEmdw";
				const genAI = new GoogleGenerativeAI(API_KEY);

				// Inicializar el chat
				const chat = genAI.getGenerativeModel({
					model: "gemini-pro"
				}).startChat();

				// Función para obtener la información de PHP y enviar el mensaje inicial
				async function fetchPhpDataAndSendInitialMessage() {
					try {
						const response = await fetch('php/context.php');
						if (!response.ok) {
							throw new Error('La solicitud a PHP falló');
						}
						const phpDataJson = await response.json();

						// Limpiar y formatear el JSON para una mejor legibilidad en el prompt
						const phpDataString = JSON.stringify(phpDataJson, null, 2);

						// Mensaje inicial con la información de PHP
						const currentDate = new Date();
						const options = {
							weekday: 'long',
							year: 'numeric',
							month: 'long',
							day: 'numeric'
						};
						const formattedDate = currentDate.toLocaleDateString('es-ES', options);

						const initialPrompt = `Beker, como asistente virtual inteligente, tienes acceso a la información actualizada de la panadería Insuperable de Valledupar (Se trabaja de Lunes A Sabado) hoy es ${formattedDate}. Aquí está la información:

${phpDataString}

Cuando se solicite información que pueda ser presentada en forma de tabla, por favor, proporciona la respuesta en un formato de tabla HTML utilizando el estilo de Metronic. Por ejemplo:

Si se pide la suma de los gastos de hoy, la respuesta debe ser un número.
Si se te solicita cerrar el dia de hoy dale al usuario este boton:  <button id="cerrarDia" class="btn btn-danger"> <i class="fa-solid fa-moon"></i> Cerrar Día</button>
Si se te solicita el reporte semanal o ver el reporte semanl o ver los gastos de la semana o las ventas muestrale este boton y dale una descripcion de lo que puede encontrar  <button type="button" class="btn btn-outline btn-outline-dashed btn-outline-secondary btn-active-light-secondary" data-bs-toggle="modal" data-bs-target="#kt_modal_2">
    Ver
</button>
Si necesitas manejar las respuestas no las pongas con **texto** sin no con estilo bold puedes encerrarlo con una etiqueta <strong> o puedes encerrar el texto en <div class="text-gray-900">texto aca</div> y en otros estilos para destacar la repuesta y que sea mas bonita <div class="text-white"></div>
Intenta devolver la respuesta en un formato fácil de leer y comprender. Por ejemplo, si se solicita la lista de gastos de hoy, la respuesta debe ser una tabla HTML con las columnas de fecha, descripción y monto.
Si se solicita un desglose de los gastos, la respuesta debe ser una tabla HTML como se muestra a continuación:
<div class='table-responsive'>
    <table class='table'>
        <thead>
            <tr class='fw-bold fs-6 text-gray-800'>
                <th>Fecha</th>
                <th>Descripción</th>
                <th>Monto</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí irían las filas con los datos de los gastos y culquier otro dato que se necesite -->
        </tbody>
    </table>
</div>
Por favor, sigue este formato para todas las respuestas.`;

						await chat.sendMessage(initialPrompt);
					} catch (error) {
						console.error('Error al obtener la información de PHP o al enviar el mensaje inicial:', error);
						// Aquí podrías mostrar un mensaje de error al usuario si es necesario
					}
				}

				// Llamar a la función después de iniciar el chat
				fetchPhpDataAndSendInitialMessage();

				document.getElementById('send_button').addEventListener('click', async () => {
					const inputElement = document.getElementById('message_input');
					const message = inputElement.value.trim();
					inputElement.value = '';

					if (message) {
						displayMessage(message, 'out', 'Mileidys');
						displayLoadingIndicator();

						try {
							const result = await chat.sendMessage(message);
							const response = await result.response;
							const text = await response.text();

							removeLoadingIndicator();
							displayMessage(text, 'in', 'Beker With Gemini');
						} catch (error) {
							console.error('Error al enviar el mensaje o recibir la respuesta:', error);
							removeLoadingIndicator();
							displayMessage('Error al obtener la respuesta.', 'in', 'Beker');
						}
					}
				});

				async function displayMessage(text, type, name) {
					const messagesContainer = document.querySelector('[data-kt-element="messages"]');
					const messageElement = document.createElement('div');
					messageElement.classList.add('d-flex', 'mb-10');
					messageElement.innerHTML = `
        <div class="d-flex flex-column align-items-${type === 'out' ? 'end' : 'start'}">
            <div class="d-flex align-items-center mb-2">
                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">${name}</a>
            </div>
            <div class="p-5 rounded bg-light-${type === 'out' ? 'primary' : 'info'} text-gray-900 fw-semibold mw-lg-400px text-${type === 'out' ? 'end' : 'start'}" data-kt-element="message-text"></div>
        </div>
    `;
					messagesContainer.appendChild(messageElement);

					const messageTextElement = messageElement.querySelector('[data-kt-element="message-text"]');

					if (text.includes('<table') || text.includes('<div') || text.includes('<button')) {
						messageTextElement.innerHTML = text;
					} else {
						const words = text.split(' ');
						for (const word of words) {
							const wordElement = document.createElement('span');
							wordElement.textContent = word + ' ';
							messageTextElement.appendChild(wordElement);
							messagesContainer.scrollTop = messagesContainer.scrollHeight;
							await new Promise(resolve => setTimeout(resolve, 50));
						}
					}

					messagesContainer.scrollTop = messagesContainer.scrollHeight;
				}

				function displayLoadingIndicator() {
					const messagesContainer = document.querySelector('[data-kt-element="messages"]');
					const loadingElement = document.createElement('div');
					loadingElement.classList.add('d-flex', 'justify-content-start', 'mb-10');
					loadingElement.innerHTML = `
            <div class="d-flex flex-column align-items-start">
                <div class="d-flex align-items-center mb-2">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Beker</a>
                </div>
                <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start">
                    <i class="fa-solid fa-ellipsis fa-bounce"></i>
                </div>
            </div>
        `;
					messagesContainer.appendChild(loadingElement);
					messagesContainer.scrollTop = messagesContainer.scrollHeight;
				}

				function removeLoadingIndicator() {
					const messagesContainer = document.querySelector('[data-kt-element="messages"]');
					const loadingElement = messagesContainer.lastElementChild;
					if (loadingElement.querySelector('.fa-ellipsis')) {
						messagesContainer.removeChild(loadingElement);
					}
				}
			</script>

			<!--end::Card footer-->
		</div>
		<!--end::Messenger-->
	</div>
	<!--end::Chat drawer-->
	<!--begin::Chat drawer-->
	<div id="kt_shopping_cart" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="cart" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle" data-kt-drawer-close="#kt_drawer_shopping_cart_close">
		<!--begin::Messenger-->
		<div class="card card-flush w-100 rounded-0">
			<!--begin::Card header-->
			<div class="card-header">
				<!--begin::Title-->
				<h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>
				<!--end::Title-->
				<!--begin::Card toolbar-->
				<div class="card-toolbar">
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close">
						<i class="ki-outline ki-cross fs-2"></i>
					</div>
					<!--end::Close-->
				</div>
				<!--end::Card toolbar-->
			</div>
			<!--end::Card header-->
			<!--begin::Card body-->
			<div class="card-body hover-scroll-overlay-y h-400px pt-5">
				<!--begin::Item-->
				<div class="d-flex flex-stack">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column me-3">
						<!--begin::Section-->
						<div class="mb-3">
							<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>
							<span class="text-gray-500 fw-semibold d-block">The best kitchen gadget in 2022</span>
						</div>
						<!--end::Section-->
						<!--begin::Section-->
						<div class="d-flex align-items-center">
							<span class="fw-bold text-gray-800 fs-5">$ 350</span>
							<span class="text-muted mx-2">for</span>
							<span class="fw-bold text-gray-800 fs-5 me-3">5</span>
							<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
								<i class="ki-outline ki-minus fs-4"></i>
							</a>
							<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
								<i class="ki-outline ki-plus fs-4"></i>
							</a>
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Pic-->
					<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
						<img src="assets/media/stock/600x400/img-1.jpg" alt="" />
					</div>
					<!--end::Pic-->
				</div>
				<!--end::Item-->
				<!--begin::Separator-->
				<div class="separator separator-dashed my-6"></div>
				<!--end::Separator-->
				<!--begin::Item-->
				<div class="d-flex flex-stack">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column me-3">
						<!--begin::Section-->
						<div class="mb-3">
							<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>
							<span class="text-gray-500 fw-semibold d-block">Smart tool for cooking</span>
						</div>
						<!--end::Section-->
						<!--begin::Section-->
						<div class="d-flex align-items-center">
							<span class="fw-bold text-gray-800 fs-5">$ 650</span>
							<span class="text-muted mx-2">for</span>
							<span class="fw-bold text-gray-800 fs-5 me-3">4</span>
							<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
								<i class="ki-outline ki-minus fs-4"></i>
							</a>
							<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
								<i class="ki-outline ki-plus fs-4"></i>
							</a>
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Pic-->
					<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
						<img src="assets/media/stock/600x400/img-3.jpg" alt="" />
					</div>
					<!--end::Pic-->
				</div>
				<!--end::Item-->
				<!--begin::Separator-->
				<div class="separator separator-dashed my-6"></div>
				<!--end::Separator-->
				<!--begin::Item-->
				<div class="d-flex flex-stack">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column me-3">
						<!--begin::Section-->
						<div class="mb-3">
							<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>
							<span class="text-gray-500 fw-semibold d-block">Professional camera for edge</span>
						</div>
						<!--end::Section-->
						<!--begin::Section-->
						<div class="d-flex align-items-center">
							<span class="fw-bold text-gray-800 fs-5">$ 150</span>
							<span class="text-muted mx-2">for</span>
							<span class="fw-bold text-gray-800 fs-5 me-3">3</span>
							<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
								<i class="ki-outline ki-minus fs-4"></i>
							</a>
							<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
								<i class="ki-outline ki-plus fs-4"></i>
							</a>
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Pic-->
					<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
						<img src="assets/media/stock/600x400/img-8.jpg" alt="" />
					</div>
					<!--end::Pic-->
				</div>
				<!--end::Item-->
				<!--begin::Separator-->
				<div class="separator separator-dashed my-6"></div>
				<!--end::Separator-->
				<!--begin::Item-->
				<div class="d-flex flex-stack">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column me-3">
						<!--begin::Section-->
						<div class="mb-3">
							<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
							<span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
						</div>
						<!--end::Section-->
						<!--begin::Section-->
						<div class="d-flex align-items-center">
							<span class="fw-bold text-gray-800 fs-5">$ 1450</span>
							<span class="text-muted mx-2">for</span>
							<span class="fw-bold text-gray-800 fs-5 me-3">7</span>
							<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
								<i class="ki-outline ki-minus fs-4"></i>
							</a>
							<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
								<i class="ki-outline ki-plus fs-4"></i>
							</a>
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Pic-->
					<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
						<img src="assets/media/stock/600x400/img-26.jpg" alt="" />
					</div>
					<!--end::Pic-->
				</div>
				<!--end::Item-->
				<!--begin::Separator-->
				<div class="separator separator-dashed my-6"></div>
				<!--end::Separator-->
				<!--begin::Item-->
				<div class="d-flex flex-stack">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column me-3">
						<!--begin::Section-->
						<div class="mb-3">
							<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>
							<span class="text-gray-500 fw-semibold d-block">Perfect animation tool</span>
						</div>
						<!--end::Section-->
						<!--begin::Section-->
						<div class="d-flex align-items-center">
							<span class="fw-bold text-gray-800 fs-5">$ 650</span>
							<span class="text-muted mx-2">for</span>
							<span class="fw-bold text-gray-800 fs-5 me-3">7</span>
							<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
								<i class="ki-outline ki-minus fs-4"></i>
							</a>
							<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
								<i class="ki-outline ki-plus fs-4"></i>
							</a>
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Pic-->
					<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
						<img src="assets/media/stock/600x400/img-21.jpg" alt="" />
					</div>
					<!--end::Pic-->
				</div>
				<!--end::Item-->
				<!--begin::Separator-->
				<div class="separator separator-dashed my-6"></div>
				<!--end::Separator-->
				<!--begin::Item-->
				<div class="d-flex flex-stack">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column me-3">
						<!--begin::Section-->
						<div class="mb-3">
							<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>
							<span class="text-gray-500 fw-semibold d-block">Profile info,Timeline etc</span>
						</div>
						<!--end::Section-->
						<!--begin::Section-->
						<div class="d-flex align-items-center">
							<span class="fw-bold text-gray-800 fs-5">$ 720</span>
							<span class="text-muted mx-2">for</span>
							<span class="fw-bold text-gray-800 fs-5 me-3">6</span>
							<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
								<i class="ki-outline ki-minus fs-4"></i>
							</a>
							<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
								<i class="ki-outline ki-plus fs-4"></i>
							</a>
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Pic-->
					<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
						<img src="assets/media/stock/600x400/img-34.jpg" alt="" />
					</div>
					<!--end::Pic-->
				</div>
				<!--end::Item-->
				<!--begin::Separator-->
				<div class="separator separator-dashed my-6"></div>
				<!--end::Separator-->
				<!--begin::Item-->
				<div class="d-flex flex-stack">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column me-3">
						<!--begin::Section-->
						<div class="mb-3">
							<a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
							<span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
						</div>
						<!--end::Section-->
						<!--begin::Section-->
						<div class="d-flex align-items-center">
							<span class="fw-bold text-gray-800 fs-5">$ 430</span>
							<span class="text-muted mx-2">for</span>
							<span class="fw-bold text-gray-800 fs-5 me-3">8</span>
							<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
								<i class="ki-outline ki-minus fs-4"></i>
							</a>
							<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
								<i class="ki-outline ki-plus fs-4"></i>
							</a>
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Pic-->
					<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
						<img src="assets/media/stock/600x400/img-27.jpg" alt="" />
					</div>
					<!--end::Pic-->
				</div>
				<!--end::Item-->
			</div>
			<!--end::Card body-->
			<!--begin::Card footer-->
			<div class="card-footer">
				<!--begin::Item-->
				<div class="d-flex flex-stack">
					<span class="fw-bold text-gray-600">Total</span>
					<span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
				</div>
				<!--end::Item-->
				<!--begin::Item-->
				<div class="d-flex flex-stack">
					<span class="fw-bold text-gray-600">Sub total</span>
					<span class="text-primary fw-bolder fs-5">$ 246.35</span>
				</div>
				<!--end::Item-->
				<!--end::Action-->
				<div class="d-flex justify-content-end mt-9">
					<a href="#" class="btn btn-primary d-flex justify-content-end">Pleace Order</a>
				</div>
				<!--end::Action-->
			</div>
			<!--end::Card footer-->
		</div>
		<!--end::Messenger-->
	</div>
	<!--end::Chat drawer-->
	<!--end::Drawers-->
	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<i class="ki-outline ki-arrow-up"></i>
	</div>
	<!--end::Scrolltop-->
	<!--begin::Modals-->
	<!--begin::Modal - Upgrade plan-->
	<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-xl">
			<!--begin::Modal content-->
			<div class="modal-content rounded">
				<!--begin::Modal header-->
				<div class="modal-header justify-content-end border-0 pb-0">
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<i class="ki-outline ki-cross fs-1"></i>
					</div>
					<!--end::Close-->
				</div>
				<!--end::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body pt-0 pb-15 px-5 px-xl-20">
					<!--begin::Heading-->
					<div class="mb-13 text-center">
						<h1 class="mb-3">Upgrade a Plan</h1>
						<div class="text-muted fw-semibold fs-5">If you need more info, please check
							<a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.
						</div>
					</div>
					<!--end::Heading-->
					<!--begin::Plans-->
					<div class="d-flex flex-column">
						<!--begin::Nav group-->
						<div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
							<button class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">Monthly</button>
							<button class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">Annual</button>
						</div>
						<!--end::Nav group-->
						<!--begin::Row-->
						<div class="row mt-10">
							<!--begin::Col-->
							<div class="col-lg-6 mb-10 mb-lg-0">
								<!--begin::Tabs-->
								<div class="nav flex-column">
									<!--begin::Tab link-->
									<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
										<!--end::Description-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Radio-->
											<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
												<input class="form-check-input" type="radio" name="plan" checked="checked" value="startup" />
											</div>
											<!--end::Radio-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Startup
												</div>
												<div class="fw-semibold opacity-75">Best for startups</div>
											</div>
											<!--end::Info-->
										</div>
										<!--end::Description-->
										<!--begin::Price-->
										<div class="ms-5">
											<span class="mb-2">$</span>
											<span class="fs-3x fw-bold" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
											<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
										</div>
										<!--end::Price-->
									</label>
									<!--end::Tab link-->
									<!--begin::Tab link-->
									<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
										<!--end::Description-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Radio-->
											<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
												<input class="form-check-input" type="radio" name="plan" value="advanced" />
											</div>
											<!--end::Radio-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Advanced
												</div>
												<div class="fw-semibold opacity-75">Best for 100+ team size</div>
											</div>
											<!--end::Info-->
										</div>
										<!--end::Description-->
										<!--begin::Price-->
										<div class="ms-5">
											<span class="mb-2">$</span>
											<span class="fs-3x fw-bold" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
											<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
										</div>
										<!--end::Price-->
									</label>
									<!--end::Tab link-->
									<!--begin::Tab link-->
									<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
										<!--end::Description-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Radio-->
											<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
												<input class="form-check-input" type="radio" name="plan" value="enterprise" />
											</div>
											<!--end::Radio-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Enterprise
													<span class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span>
												</div>
												<div class="fw-semibold opacity-75">Best value for 1000+ team</div>
											</div>
											<!--end::Info-->
										</div>
										<!--end::Description-->
										<!--begin::Price-->
										<div class="ms-5">
											<span class="mb-2">$</span>
											<span class="fs-3x fw-bold" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
											<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
										</div>
										<!--end::Price-->
									</label>
									<!--end::Tab link-->
									<!--begin::Tab link-->
									<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">
										<!--end::Description-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Radio-->
											<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
												<input class="form-check-input" type="radio" name="plan" value="custom" />
											</div>
											<!--end::Radio-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Custom
												</div>
												<div class="fw-semibold opacity-75">Requet a custom license</div>
											</div>
											<!--end::Info-->
										</div>
										<!--end::Description-->
										<!--begin::Price-->
										<div class="ms-5">
											<a href="#" class="btn btn-sm btn-success">Contact Us</a>
										</div>
										<!--end::Price-->
									</label>
									<!--end::Tab link-->
								</div>
								<!--end::Tabs-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-lg-6">
								<!--begin::Tab content-->
								<div class="tab-content rounded h-100 bg-light p-10">
									<!--begin::Tab Pane-->
									<div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
										<!--begin::Heading-->
										<div class="pb-5">
											<h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
											<div class="text-muted fw-semibold">Optimal for 10+ team size and new
												startup</div>
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="pt-1">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active
													Users</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30
													Project Integrations</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics
													Module</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-muted flex-grow-1">Finance
													Module</span>
												<i class="ki-outline ki-cross-circle fs-1"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-muted flex-grow-1">Accounting
													Module</span>
												<i class="ki-outline ki-cross-circle fs-1"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-muted flex-grow-1">Network
													Platform</span>
												<i class="ki-outline ki-cross-circle fs-1"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center">
												<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud
													Space</span>
												<i class="ki-outline ki-cross-circle fs-1"></i>
											</div>
											<!--end::Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Tab Pane-->
									<!--begin::Tab Pane-->
									<div class="tab-pane fade" id="kt_upgrade_plan_advanced">
										<!--begin::Heading-->
										<div class="pb-5">
											<h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
											<div class="text-muted fw-semibold">Optimal for 100+ team size and grown
												company</div>
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="pt-1">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active
													Users</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30
													Project Integrations</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics
													Module</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance
													Module</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting
													Module</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-muted flex-grow-1">Network
													Platform</span>
												<i class="ki-outline ki-cross-circle fs-1"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center">
												<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud
													Space</span>
												<i class="ki-outline ki-cross-circle fs-1"></i>
											</div>
											<!--end::Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Tab Pane-->
									<!--begin::Tab Pane-->
									<div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
										<!--begin::Heading-->
										<div class="pb-5">
											<h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
											<div class="text-muted fw-semibold">Optimal for 1000+ team and enterpise
											</div>
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="pt-1">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active
													Users</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30
													Project Integrations</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics
													Module</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance
													Module</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting
													Module</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network
													Platform</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud
													Space</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Tab Pane-->
									<!--begin::Tab Pane-->
									<div class="tab-pane fade" id="kt_upgrade_plan_custom">
										<!--begin::Heading-->
										<div class="pb-5">
											<h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
											<div class="text-muted fw-semibold">Optimal for corporations</div>
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="pt-1">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited
													Users</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited
													Project Integrations</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics
													Module</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance
													Module</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting
													Module</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network
													Platform</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud
													Space</span>
												<i class="ki-outline ki-check-circle fs-1 text-success"></i>
											</div>
											<!--end::Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Tab Pane-->
								</div>
								<!--end::Tab content-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Plans-->
					<!--begin::Actions-->
					<div class="d-flex flex-center flex-row-fluid pt-12">
						<button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">
							<!--begin::Indicator label-->
							<span class="indicator-label">Upgrade Plan</span>
							<!--end::Indicator label-->
							<!--begin::Indicator progress-->
							<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
							<!--end::Indicator progress-->
						</button>
					</div>
					<!--end::Actions-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - Upgrade plan-->
	<!--begin::Modal - Users Search-->
	<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-dialog-centered mw-650px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header pb-0 border-0 justify-content-end">
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<i class="ki-outline ki-cross fs-1"></i>
					</div>
					<!--end::Close-->
				</div>
				<!--begin::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
					<!--begin::Content-->
					<div class="text-center mb-13">
						<h1 class="mb-3">Search Users</h1>
						<div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
					</div>
					<!--end::Content-->
					<!--begin::Search-->
					<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
						<!--begin::Form-->
						<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
							<!--begin::Hidden input(Added to disable form autocomplete)-->
							<input type="hidden" />
							<!--end::Hidden input-->
							<!--begin::Icon-->
							<i class="ki-outline ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"></i>
							<!--end::Icon-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
							<!--end::Input-->
							<!--begin::Spinner-->
							<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
								<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
							</span>
							<!--end::Spinner-->
							<!--begin::Reset-->
							<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
								<i class="ki-outline ki-cross fs-2 fs-lg-1 me-0"></i>
							</span>
							<!--end::Reset-->
						</form>
						<!--end::Form-->
						<!--begin::Wrapper-->
						<div class="py-5">
							<!--begin::Suggestions-->
							<div data-kt-search-element="suggestions">
								<!--begin::Heading-->
								<h3 class="fw-semibold mb-5">Recently searched:</h3>
								<!--end::Heading-->
								<!--begin::Users-->
								<div class="mh-375px scroll-y me-n7 pe-7">
									<!--begin::User-->
									<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-semibold">
											<span class="fs-6 text-gray-800 me-2">Emma Smith</span>
											<span class="badge badge-light">Art Director</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
									<!--begin::User-->
									<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-semibold">
											<span class="fs-6 text-gray-800 me-2">Melody Macy</span>
											<span class="badge badge-light">Marketing Analytic</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
									<!--begin::User-->
									<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-semibold">
											<span class="fs-6 text-gray-800 me-2">Max Smith</span>
											<span class="badge badge-light">Software Enginer</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
									<!--begin::User-->
									<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-semibold">
											<span class="fs-6 text-gray-800 me-2">Sean Bean</span>
											<span class="badge badge-light">Web Developer</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
									<!--begin::User-->
									<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-semibold">
											<span class="fs-6 text-gray-800 me-2">Brian Cox</span>
											<span class="badge badge-light">UI/UX Designer</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
								</div>
								<!--end::Users-->
							</div>
							<!--end::Suggestions-->
							<!--begin::Results(add d-none to below element to hide the users list by default)-->
							<div data-kt-search-element="results" class="d-none">
								<!--begin::Users-->
								<div class="mh-375px scroll-y me-n7 pe-7">
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
													Smith</a>
												<div class="fw-semibold text-muted">smith@kpmg.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
													Macy</a>
												<div class="fw-semibold text-muted">melody@altbox.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1" selected="selected">Guest</option>
												<option value="2">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
													Smith</a>
												<div class="fw-semibold text-muted">max@kt.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
													Bean</a>
												<div class="fw-semibold text-muted">sean@dellito.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian
													Cox</a>
												<div class="fw-semibold text-muted">brian@exchange.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
													Collins</a>
												<div class="fw-semibold text-muted">mik@pex.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
													Mitcham</a>
												<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
													Wild</a>
												<div class="fw-semibold text-muted">olivia@corpmail.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil
													Owen</a>
												<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1" selected="selected">Guest</option>
												<option value="2">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
													Wilson</a>
												<div class="fw-semibold text-muted">dam@consilting.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
													Bold</a>
												<div class="fw-semibold text-muted">emma@intenso.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana
													Crown</a>
												<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1" selected="selected">Guest</option>
												<option value="2">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert
													Doe</a>
												<div class="fw-semibold text-muted">robert@benko.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John
													Miller</a>
												<div class="fw-semibold text-muted">miller@mapple.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy
													Kunic</a>
												<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
													Wilder</a>
												<div class="fw-semibold text-muted">ethan@loop.com.au</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1" selected="selected">Guest</option>
												<option value="2">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
													Collins</a>
												<div class="fw-semibold text-muted">mik@pex.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
								</div>
								<!--end::Users-->
								<!--begin::Actions-->
								<div class="d-flex flex-center mt-15">
									<button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
									<button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add
										Selected Users</button>
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Results-->
							<!--begin::Empty-->
							<div data-kt-search-element="empty" class="text-center d-none">
								<!--begin::Message-->
								<div class="fw-semibold py-10">
									<div class="text-gray-600 fs-3 mb-2">No users found</div>
									<div class="text-muted fs-6">Try to search by username, full name or email...</div>
								</div>
								<!--end::Message-->
								<!--begin::Illustration-->
								<div class="text-center px-5">
									<img src="assets/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
								</div>
								<!--end::Illustration-->
							</div>
							<!--end::Empty-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Search-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - Users Search-->
	<!--begin::Modal - Invite Friends-->
	<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog mw-650px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header pb-0 border-0 justify-content-end">
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<i class="ki-outline ki-cross fs-1"></i>
					</div>
					<!--end::Close-->
				</div>
				<!--begin::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
					<!--begin::Heading-->
					<div class="text-center mb-13">
						<!--begin::Title-->
						<h1 class="mb-3">Invite a Friend</h1>
						<!--end::Title-->
						<!--begin::Description-->
						<div class="text-muted fw-semibold fs-5">If you need more info, please check out
							<a href="#" class="link-primary fw-bold">FAQ Page</a>.
						</div>
						<!--end::Description-->
					</div>
					<!--end::Heading-->
					<!--begin::Google Contacts Invite-->
					<div class="btn btn-light-primary fw-bold w-100 mb-8">
						<img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Invite
						Gmail Contacts
					</div>
					<!--end::Google Contacts Invite-->
					<!--begin::Separator-->
					<div class="separator d-flex flex-center mb-8">
						<span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
					</div>
					<!--end::Separator-->
					<!--begin::Textarea-->
					<textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
					<!--end::Textarea-->
					<!--begin::Users-->
					<div class="mb-10">
						<!--begin::Heading-->
						<div class="fs-6 fw-semibold mb-2">Your Invitations</div>
						<!--end::Heading-->
						<!--begin::List-->
						<div class="mh-300px scroll-y me-n7 pe-7">
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
											Smith</a>
										<div class="fw-semibold text-muted">smith@kpmg.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
											Macy</a>
										<div class="fw-semibold text-muted">melody@altbox.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1" selected="selected">Guest</option>
										<option value="2">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
											Smith</a>
										<div class="fw-semibold text-muted">max@kt.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
											Bean</a>
										<div class="fw-semibold text-muted">sean@dellito.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian
											Cox</a>
										<div class="fw-semibold text-muted">brian@exchange.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
											Collins</a>
										<div class="fw-semibold text-muted">mik@pex.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
											Mitcham</a>
										<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
											Wild</a>
										<div class="fw-semibold text-muted">olivia@corpmail.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil
											Owen</a>
										<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1" selected="selected">Guest</option>
										<option value="2">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
											Wilson</a>
										<div class="fw-semibold text-muted">dam@consilting.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
											Bold</a>
										<div class="fw-semibold text-muted">emma@intenso.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana
											Crown</a>
										<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1" selected="selected">Guest</option>
										<option value="2">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert
											Doe</a>
										<div class="fw-semibold text-muted">robert@benko.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John
											Miller</a>
										<div class="fw-semibold text-muted">miller@mapple.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy
											Kunic</a>
										<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
											Wilder</a>
										<div class="fw-semibold text-muted">ethan@loop.com.au</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1" selected="selected">Guest</option>
										<option value="2">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
											Bean</a>
										<div class="fw-semibold text-muted">sean@dellito.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
						</div>
						<!--end::List-->
					</div>
					<!--end::Users-->
					<!--begin::Notice-->
					<div class="d-flex flex-stack">
						<!--begin::Label-->
						<div class="me-5 fw-semibold">
							<label class="fs-6">Adding Users by Team Members</label>
							<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
						</div>
						<!--end::Label-->
						<!--begin::Switch-->
						<label class="form-check form-switch form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" checked="checked" />
							<span class="form-check-label fw-semibold text-muted">Allowed</span>
						</label>
						<!--end::Switch-->
					</div>
					<!--end::Notice-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - Invite Friend-->
	<!--end::Modals-->
	<!--begin::Javascript-->
	<script>
		var hostUrl = "assets/";
	</script>
	<!--begin::Global Javascript Bundle(mandatory for all pages)-->
	<script src="assets/plugins/global/plugins.bundle.js"></script>
	<script src="assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Vendors Javascript(used for this page only)-->
	<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
	<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
	<!--end::Vendors Javascript-->
	<!--begin::Custom Javascript(used for this page only)-->
	<script src="assets/js/widgets.bundle.js"></script>
	<script src="assets/js/custom/widgets.js"></script>
	<script src="assets/js/custom/apps/chat/chat.js"></script>
	<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
	<script src="assets/js/custom/utilities/modals/users-search.js"></script>


	<script>
		var tiempoInactividad = 10 * 60; // 10 minutos en segundos
		var temporizadorInactividad;
		var temporizadorContador;

		function iniciarContador() {
			var minutos, segundos;
			temporizadorContador = setInterval(function() {
				minutos = parseInt(tiempoInactividad / 60, 10);
				segundos = parseInt(tiempoInactividad % 60, 10);

				minutos = minutos < 10 ? "0" + minutos : minutos;
				segundos = segundos < 10 ? "0" + segundos : segundos;

				document.getElementById('tiempo').textContent = minutos + ":" + segundos;

				if (--tiempoInactividad < 0) {
					window.location.href = 'authentication/layouts/creative/two-factor.html'; // Redirige al usuario
				}
			}, 1000);
		}

		function reiniciarTemporizador() {
			// Limpiar los temporizadores existentes
			clearTimeout(temporizadorInactividad);
			clearInterval(temporizadorContador);

			tiempoInactividad = 10 * 60; // Reiniciar el contador a 10 minutos
			iniciarContador(); // Reiniciar el contador regresivo

			// Establecer un nuevo temporizador de inactividad
			temporizadorInactividad = setTimeout(function() {
				// Este código se ejecutará después de 10 minutos de inactividad
				// La redirección se maneja en el contador regresivo
			}, tiempoInactividad * 1000);
		}

		// Eventos que reiniciarán el temporizador
		window.onload = reiniciarTemporizador;
		window.onmousemove = reiniciarTemporizador;
		window.onmousedown = reiniciarTemporizador; // Captura la actividad del clic
		window.ontouchstart = reiniciarTemporizador; // Captura la actividad táctil
		window.onclick = reiniciarTemporizador; // Captura los clics
		window.onkeypress = reiniciarTemporizador;
		window.addEventListener('scroll', reiniciarTemporizador, true); // Captura el scrolling

		// Iniciar el contador por primera vez
		reiniciarTemporizador();
	</script>

	<!--end::Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>