@extends('layout.main')

@section('container')
	<!--begin::Content-->
	<div class="content d-flex flex-column flex-column-fluid pt-0" id="kt_content">
						<!--begin::Toolbar-->
						<div class="toolbar" id="kt_toolbar">
							<!--begin::Container-->
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<!--begin::Page title-->
								<div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center me-3 flex-wrap mb-5 mb-lg-0 lh-1">
									<!--begin::Title-->
									<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Tickets List</h1>
									<!--end::Title-->
									<!--begin::Separator-->
									<span class="h-20px border-gray-200 border-start mx-4"></span>
									<!--end::Separator-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">
											<a href="index.html" class="text-muted text-hover-primary">Home</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-200 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">Support Center</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-200 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">Tickets</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-200 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-dark">Tickets List</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
								<!--begin::Actions-->
								<div class="d-flex align-items-center py-1">
									<!--begin::Wrapper-->
									<div class="me-4">
										<!--begin::Menu-->
										<a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
										<!--begin::Svg Icon | path: icons/duotone/Text/Filter.svg-->
										<span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M5,4 L19,4 C19.2761424,4 19.5,4.22385763 19.5,4.5 C19.5,4.60818511 19.4649111,4.71345191 19.4,4.8 L14,12 L14,20.190983 C14,20.4671254 13.7761424,20.690983 13.5,20.690983 C13.4223775,20.690983 13.3458209,20.6729105 13.2763932,20.6381966 L10,19 L10,12 L4.6,4.8 C4.43431458,4.5790861 4.4790861,4.26568542 4.7,4.1 C4.78654809,4.03508894 4.89181489,4 5,4 Z" fill="#000000" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon-->Filter</a>
										<!--begin::Menu 1-->
										<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true">
											<!--begin::Header-->
											<div class="px-7 py-5">
												<div class="fs-5 text-dark fw-bolder">Filter Options</div>
											</div>
											<!--end::Header-->
											<!--begin::Menu separator-->
											<div class="separator border-gray-200"></div>
											<!--end::Menu separator-->
											<!--begin::Form-->
											<div class="px-7 py-5">
												<!--begin::Input group-->
												<div class="mb-10">
													<!--begin::Label-->
													<label class="form-label fw-bold">Status:</label>
													<!--end::Label-->
													<!--begin::Input-->
													<div>
														<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true">
															<option></option>
															<option value="1">Approved</option>
															<option value="2">Pending</option>
															<option value="2">In Process</option>
															<option value="2">Rejected</option>
														</select>
													</div>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-10">
													<!--begin::Label-->
													<label class="form-label fw-bold">Member Type:</label>
													<!--end::Label-->
													<!--begin::Options-->
													<div class="d-flex">
														<!--begin::Options-->
														<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
															<input class="form-check-input" type="checkbox" value="1" />
															<span class="form-check-label">Author</span>
														</label>
														<!--end::Options-->
														<!--begin::Options-->
														<label class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="2" checked="checked" />
															<span class="form-check-label">Customer</span>
														</label>
														<!--end::Options-->
													</div>
													<!--end::Options-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-10">
													<!--begin::Label-->
													<label class="form-label fw-bold">Notifications:</label>
													<!--end::Label-->
													<!--begin::Switch-->
													<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
														<label class="form-check-label">Enabled</label>
													</div>
													<!--end::Switch-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="d-flex justify-content-end">
													<button type="reset" class="btn btn-sm btn-white btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
													<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
												</div>
												<!--end::Actions-->
											</div>
											<!--end::Form-->
										</div>
										<!--end::Menu 1-->
										<!--end::Menu-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Button-->
									<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a>
									<!--end::Button-->
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="flex-grow-1">
								<!--begin::Hero-->
								<div class="bgi-no-repeat bgi-position-center bgi-size-cover h-550px" style="background-image:url('assets/media/patterns/pattern-1.jpg')">
									<!--begin::Container-->
									<div class="container">
										<!--begin::Head-->
										<div class="d-flex flex-stack py-8">
											<!--begin::Title-->
											<h2 class="fw-bolder text-white pe-2 m-0">Support Center</h2>
											<!--end::Title-->
											<!--begin::Action-->
											<a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_new_ticket" class="btn btn-success">Create Ticket</a>
											<!--end::Action-->
										</div>
										<!--end::Head-->
									</div>
									<!--end::Container-->
									<!--begin::Separator-->
									<div class="separator separator-solid opacity-10 mb-11"></div>
									<!--end::Separator-->
									<!--begin::Body-->
									<div class="pt-1 mx-5">
										<!--begin::Title-->
										<h3 class="fs-2x fw-bolder mb-3 text-white text-center mt-17 mb-13">How Can We Help You?</h3>
										<!--end::Title-->
										<!--begin::Input group-->
										<div class="position-relative w-100 mw-600px mx-auto" style="background: rgba(255, 255, 255, 0.05);">
											<!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
											<span class="svg-icon svg-icon-2qx svg-icon-white position-absolute top-50 translate-middle ms-9">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
													</g>
												</svg>
											</span>
											<!--end::Svg Icon-->
											<input type="text" class="form-control bg-transparent fs-2 py-6 ps-17 placeholder-white opacity-50" style="border: 1px solid rgba(255, 255, 255, 0.24);" name="search" value="" placeholder="Ask a question" />
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::-->
								<!--begin::Svg-->
								<div class="mt-n17 content-bg-for-font-color">
									<svg width="100%" height="56px" viewBox="0 0 100 100" version="1.1" preserveAspectRatio="none" class="">
										<path d="M0,0 C16.6666667,66 33.3333333,99 50,99 C66.6666667,99 83.3333333,66 100,0 L100,100 L0,100 L0,0 Z" fill="currentColor"></path>
									</svg>
								</div>
								<!--end::Svg-->
								<!--begin::Container-->
								<div class="container">
									<!--begin::Card-->
									<div class="card mb-15" style="margin-top: -90px">
										<!--begin::Card body-->
										<div class="card-body">
											<!--begin::Nav-->
											<ul class="nav mx-auto flex-shrink-0 flex-center flex-wrap border-transparent fs-6 fw-bolder">
												<!--begin::Nav item-->
												<li class="nav-item my-3">
													<a class="btn btn-active-light-primary fw-boldest nav-link btn-color-gray-700 px-3 px-lg-8 mx-1 text-uppercase" href="apps/support-center/overview.html">Overview</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item my-3">
													<a class="btn btn-active-light-primary fw-boldest nav-link btn-color-gray-700 px-3 px-lg-8 mx-1 text-uppercase active" href="apps/support-center/tickets/list.html">tickets</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item my-3">
													<a class="btn btn-active-light-primary fw-boldest nav-link btn-color-gray-700 px-3 px-lg-8 mx-1 text-uppercase" href="apps/support-center/tutorials/list.html">Tutorials</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item my-3">
													<a class="btn btn-active-light-primary fw-boldest nav-link btn-color-gray-700 px-3 px-lg-8 mx-1 text-uppercase" href="apps/support-center/faq.html">FAQ</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item my-3">
													<a class="btn btn-active-light-primary fw-boldest nav-link btn-color-gray-700 px-3 px-lg-8 mx-1 text-uppercase" href="apps/support-center/licenses.html">Licenses</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item my-3">
													<a class="btn btn-active-light-primary fw-boldest nav-link btn-color-gray-700 px-3 px-lg-8 mx-1 text-uppercase" href="apps/support-center/contact.html">Contact US</a>
												</li>
												<!--end::Nav item-->
											</ul>
											<!--end::Nav-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Container-->
								<!--begin::Container-->
								<div class="container">
									<!--begin::Card-->
									<div class="card">
										<!--begin::Card body-->
										<div class="card-body py-2 me-xxl-9">
											<!--begin::Layout-->
											<div class="d-flex flex-column flex-xl-row">
												<!--begin::Content-->
												<div class="flex-lg-row-fluid">
													<!--begin::Tickets list-->
													<div class="card">
														<!--begin::Body-->
														<div class="card-body py-14 me-lg-10">
															<!--begin::Search form-->
															<form method="post" action="#" class="form">
																<!--begin::Input wrapper-->
																<div class="position-relative mb-15 pt-1">
																	<!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-primary position-absolute top-50 translate-middle ms-9">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
																			</g>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<input type="text" class="form-control form-control-lg form-control-solid ps-14" name="search" value="" placeholder="Search" />
																</div>
																<!--end::Input wrapper-->
															</form>
															<!--end::Search form-->
															<!--begin::Heading-->
															<h1 class="text-dark mb-9 fw-bolder">Public Tickets</h1>
															<!--end::Heading-->
															<!--begin::Tickets-->
															<div class="mb-0">
																<!--begin::Ticket-->
																<div class="d-flex mb-10">
																	<!--begin::Symbol-->
																	<!--begin::Svg Icon | path: icons/duotone/Files/File-done.svg-->
																	<span class="svg-icon svg-icon-2x me-5 ms-n1 mt-2 svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<polygon points="0 0 24 0 24 24 0 24" />
																				<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z M10.875,15.75 C11.1145833,15.75 11.3541667,15.6541667 11.5458333,15.4625 L15.3791667,11.6291667 C15.7625,11.2458333 15.7625,10.6708333 15.3791667,10.2875 C14.9958333,9.90416667 14.4208333,9.90416667 14.0375,10.2875 L10.875,13.45 L9.62916667,12.2041667 C9.29375,11.8208333 8.67083333,11.8208333 8.2875,12.2041667 C7.90416667,12.5875 7.90416667,13.1625 8.2875,13.5458333 L10.2041667,15.4625 C10.3958333,15.6541667 10.6354167,15.75 10.875,15.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				<path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
																			</g>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--end::Symbol-->
																	<!--begin::Section-->
																	<div class="d-flex flex-column">
																		<!--begin::Content-->
																		<div class="d-flex align-items-center mb-2">
																			<!--begin::Title-->
																			<a href="apps/support-center/tickets/view.html" class="text-dark text-hover-primary fs-4 me-3 fw-bold">How to use Netronic with Django Framework?</a>
																			<!--end::Title-->
																			<!--begin::Label-->
																			<span class="badge badge-light my-1">React</span>
																			<!--end::Label-->
																		</div>
																		<!--end::Content-->
																		<!--begin::Text-->
																		<span class="text-muted fw-bold fs-6">By KeenTHemes to save tons and more to time money projects are listed amazing
																		<br />outstanding projects are listed</span>
																		<!--end::Text-->
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Ticket-->
																<!--begin::Ticket-->
																<div class="d-flex mb-10">
																	<!--begin::Symbol-->
																	<!--begin::Svg Icon | path: icons/duotone/Files/File-Plus.svg-->
																	<span class="svg-icon svg-icon-2x me-5 ms-n1 mt-2 svg-icon-warning">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<polygon points="0 0 24 0 24 24 0 24" />
																				<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000" />
																			</g>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--end::Symbol-->
																	<!--begin::Section-->
																	<div class="d-flex flex-column">
																		<!--begin::Content-->
																		<div class="d-flex align-items-center mb-2">
																			<!--begin::Title-->
																			<a href="apps/support-center/tickets/view.html" class="text-dark text-hover-primary fs-4 me-3 fw-bold">Keen Admin npm issue</a>
																			<!--end::Title-->
																			<!--begin::Label-->
																			<span class="badge badge-light my-1">Angular</span>
																			<!--end::Label-->
																		</div>
																		<!--end::Content-->
																		<!--begin::Text-->
																		<span class="text-muted fw-bold fs-6">By KeenTHemes to save tons and more to time money projects</span>
																		<!--end::Text-->
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Ticket-->
																<!--begin::Ticket-->
																<div class="d-flex mb-10">
																	<!--begin::Symbol-->
																	<!--begin::Svg Icon | path: icons/duotone/Files/File-done.svg-->
																	<span class="svg-icon svg-icon-2x me-5 ms-n1 mt-2 svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<polygon points="0 0 24 0 24 24 0 24" />
																				<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z M10.875,15.75 C11.1145833,15.75 11.3541667,15.6541667 11.5458333,15.4625 L15.3791667,11.6291667 C15.7625,11.2458333 15.7625,10.6708333 15.3791667,10.2875 C14.9958333,9.90416667 14.4208333,9.90416667 14.0375,10.2875 L10.875,13.45 L9.62916667,12.2041667 C9.29375,11.8208333 8.67083333,11.8208333 8.2875,12.2041667 C7.90416667,12.5875 7.90416667,13.1625 8.2875,13.5458333 L10.2041667,15.4625 C10.3958333,15.6541667 10.6354167,15.75 10.875,15.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				<path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
																			</g>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--end::Symbol-->
																	<!--begin::Section-->
																	<div class="d-flex flex-column">
																		<!--begin::Content-->
																		<div class="d-flex align-items-center mb-2">
																			<!--begin::Title-->
																			<a href="apps/support-center/tickets/view.html" class="text-dark text-hover-primary fs-4 me-3 fw-bold">Metronic theme authentication to node.js / strapi backend</a>
																			<!--end::Title-->
																			<!--begin::Label-->
																			<span class="badge badge-light my-1">warning</span>
																			<!--end::Label-->
																		</div>
																		<!--end::Content-->
																		<!--begin::Text-->
																		<span class="text-muted fw-bold fs-6">By KeenTHemes to save tons and more to time money projects</span>
																		<!--end::Text-->
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Ticket-->
																<!--begin::Ticket-->
																<div class="d-flex mb-10">
																	<!--begin::Symbol-->
																	<!--begin::Svg Icon | path: icons/duotone/Files/File-done.svg-->
																	<span class="svg-icon svg-icon-2x me-5 ms-n1 mt-2 svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<polygon points="0 0 24 0 24 24 0 24" />
																				<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z M10.875,15.75 C11.1145833,15.75 11.3541667,15.6541667 11.5458333,15.4625 L15.3791667,11.6291667 C15.7625,11.2458333 15.7625,10.6708333 15.3791667,10.2875 C14.9958333,9.90416667 14.4208333,9.90416667 14.0375,10.2875 L10.875,13.45 L9.62916667,12.2041667 C9.29375,11.8208333 8.67083333,11.8208333 8.2875,12.2041667 C7.90416667,12.5875 7.90416667,13.1625 8.2875,13.5458333 L10.2041667,15.4625 C10.3958333,15.6541667 10.6354167,15.75 10.875,15.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				<path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
																			</g>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--end::Symbol-->
																	<!--begin::Section-->
																	<div class="d-flex flex-column">
																		<!--begin::Content-->
																		<div class="d-flex align-items-center mb-2">
																			<!--begin::Title-->
																			<a href="apps/support-center/tickets/view.html" class="text-dark text-hover-primary fs-4 me-3 fw-bold">How to use Metronic with Django Framework?</a>
																			<!--end::Title-->
																			<!--begin::Label-->
																			<span class="badge badge-light my-1">HTML</span>
																			<!--end::Label-->
																		</div>
																		<!--end::Content-->
																		<!--begin::Text-->
																		<span class="text-muted fw-bold fs-6">By KeenTHemes to save tons and more to time money projects are listed amazing
																		<br />outstanding projects are listed</span>
																		<!--end::Text-->
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Ticket-->
																<!--begin::Ticket-->
																<div class="d-flex mb-10">
																	<!--begin::Symbol-->
																	<!--begin::Svg Icon | path: icons/duotone/Files/File-Plus.svg-->
																	<span class="svg-icon svg-icon-2x me-5 ms-n1 mt-2 svg-icon-warning">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<polygon points="0 0 24 0 24 24 0 24" />
																				<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000" />
																			</g>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--end::Symbol-->
																	<!--begin::Section-->
																	<div class="d-flex flex-column">
																		<!--begin::Content-->
																		<div class="d-flex align-items-center mb-2">
																			<!--begin::Title-->
																			<a href="apps/support-center/tickets/view.html" class="text-dark text-hover-primary fs-4 me-3 fw-bold">Reducing footprint of Start theme</a>
																			<!--end::Title-->
																			<!--begin::Label-->
																			<span class="badge badge-light my-1">Angular</span>
																			<!--end::Label-->
																		</div>
																		<!--end::Content-->
																		<!--begin::Text-->
																		<span class="text-muted fw-bold fs-6">By KeenTHemes to save tons and more to time money projects</span>
																		<!--end::Text-->
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Ticket-->
																<!--begin::Ticket-->
																<div class="d-flex mb-10">
																	<!--begin::Symbol-->
																	<!--begin::Svg Icon | path: icons/duotone/Files/File-done.svg-->
																	<span class="svg-icon svg-icon-2x me-5 ms-n1 mt-2 svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<polygon points="0 0 24 0 24 24 0 24" />
																				<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z M10.875,15.75 C11.1145833,15.75 11.3541667,15.6541667 11.5458333,15.4625 L15.3791667,11.6291667 C15.7625,11.2458333 15.7625,10.6708333 15.3791667,10.2875 C14.9958333,9.90416667 14.4208333,9.90416667 14.0375,10.2875 L10.875,13.45 L9.62916667,12.2041667 C9.29375,11.8208333 8.67083333,11.8208333 8.2875,12.2041667 C7.90416667,12.5875 7.90416667,13.1625 8.2875,13.5458333 L10.2041667,15.4625 C10.3958333,15.6541667 10.6354167,15.75 10.875,15.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				<path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
																			</g>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--end::Symbol-->
																	<!--begin::Section-->
																	<div class="d-flex flex-column">
																		<!--begin::Content-->
																		<div class="d-flex align-items-center mb-2">
																			<!--begin::Title-->
																			<a href="apps/support-center/tickets/view.html" class="text-dark text-hover-primary fs-4 me-3 fw-bold">Metronic theme node.js / strapi backend</a>
																			<!--end::Title-->
																			<!--begin::Label-->
																			<span class="badge badge-light my-1">React</span>
																			<!--end::Label-->
																		</div>
																		<!--end::Content-->
																		<!--begin::Text-->
																		<span class="text-muted fw-bold fs-6">By KeenTHemes to save tons and more to time money projects are listed amazing
																		<br />outstanding projects are listed</span>
																		<!--end::Text-->
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Ticket-->
																<!--begin::Ticket-->
																<div class="d-flex mb-10">
																	<!--begin::Symbol-->
																	<!--begin::Svg Icon | path: icons/duotone/Files/File-Plus.svg-->
																	<span class="svg-icon svg-icon-2x me-5 ms-n1 mt-2 svg-icon-warning">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<polygon points="0 0 24 0 24 24 0 24" />
																				<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000" />
																			</g>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--end::Symbol-->
																	<!--begin::Section-->
																	<div class="d-flex flex-column">
																		<!--begin::Content-->
																		<div class="d-flex align-items-center mb-2">
																			<!--begin::Title-->
																			<a href="apps/support-center/tickets/view.html" class="text-dark text-hover-primary fs-4 me-3 fw-bold">Keen Admin npm issue</a>
																			<!--end::Title-->
																			<!--begin::Label-->
																			<span class="badge badge-light my-1">View</span>
																			<!--end::Label-->
																		</div>
																		<!--end::Content-->
																		<!--begin::Text-->
																		<span class="text-muted fw-bold fs-6">By KeenTHemes to save tons and more to time money projects</span>
																		<!--end::Text-->
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Ticket-->
																<!--begin::Ticket-->
																<div class="d-flex">
																	<!--begin::Symbol-->
																	<!--begin::Svg Icon | path: icons/duotone/Files/File-done.svg-->
																	<span class="svg-icon svg-icon-2x me-5 ms-n1 mt-2 svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<polygon points="0 0 24 0 24 24 0 24" />
																				<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z M10.875,15.75 C11.1145833,15.75 11.3541667,15.6541667 11.5458333,15.4625 L15.3791667,11.6291667 C15.7625,11.2458333 15.7625,10.6708333 15.3791667,10.2875 C14.9958333,9.90416667 14.4208333,9.90416667 14.0375,10.2875 L10.875,13.45 L9.62916667,12.2041667 C9.29375,11.8208333 8.67083333,11.8208333 8.2875,12.2041667 C7.90416667,12.5875 7.90416667,13.1625 8.2875,13.5458333 L10.2041667,15.4625 C10.3958333,15.6541667 10.6354167,15.75 10.875,15.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				<path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
																			</g>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--end::Symbol-->
																	<!--begin::Section-->
																	<div class="d-flex flex-column">
																		<!--begin::Content-->
																		<div class="d-flex align-items-center mb-2">
																			<!--begin::Title-->
																			<a href="apps/support-center/tickets/view.html" class="text-dark text-hover-primary fs-4 me-3 fw-bold">How to use Metronic with Django Framework?</a>
																			<!--end::Title-->
																			<!--begin::Label-->
																			<span class="badge badge-light my-1">PHP</span>
																			<!--end::Label-->
																		</div>
																		<!--end::Content-->
																		<!--begin::Text-->
																		<span class="text-muted fw-bold fs-6">By KeenTHemes to save tons and more to time money projects are listed amazing
																		<br />outstanding projects are listed</span>
																		<!--end::Text-->
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Ticket-->
															</div>
															<!--end::Tickets-->
															<!--begin::Pagination-->
															<ul class="pagination mt-10">
																<li class="page-item previous disabled">
																	<a href="#" class="page-link">
																		<i class="previous"></i>
																	</a>
																</li>
																<li class="page-item">
																	<a href="#" class="page-link">1</a>
																</li>
																<li class="page-item active">
																	<a href="#" class="page-link">2</a>
																</li>
																<li class="page-item">
																	<a href="#" class="page-link">3</a>
																</li>
																<li class="page-item">
																	<a href="#" class="page-link">4</a>
																</li>
																<li class="page-item">
																	<a href="#" class="page-link">5</a>
																</li>
																<li class="page-item">
																	<a href="#" class="page-link">6</a>
																</li>
																<li class="page-item next">
																	<a href="#" class="page-link">
																		<i class="next"></i>
																	</a>
																</li>
															</ul>
															<!--end::Pagination-->
														</div>
														<!--end::Body-->
													</div>
													<!--end::Tickets list-->
												</div>
												<!--end::Content-->
												<!--begin::Sidebar-->
												<div class="flex-column flex-lg-row-auto w-100 mw-xl-400px mb-10">
													<!--begin::More channels-->
													<div class="card bg-primary bg-opacity-5 mt-15">
														<!--begin::Body-->
														<div class="card-body p-12">
															<!--begin::Title-->
															<h2 class="text-dark fw-bolder mb-11">More Channels</h2>
															<!--end::Title-->
															<!--begin::Item-->
															<div class="d-flex align-items-center mb-10">
																<!--begin::Icon-->
																<i class="bi bi-file-earmark-text text-primary fs-1 me-5"></i>
																<!--end::SymIconbol-->
																<!--begin::Info-->
																<div class="d-flex flex-column">
																	<h5 class="text-gray-800 fw-bolder">Project Briefing</h5>
																	<!--begin::Section-->
																	<div class="fw-bold">
																		<!--begin::Desc-->
																		<span class="text-muted">Check out our</span>
																		<!--end::Desc-->
																		<!--begin::Link-->
																		<a href="#" class="link-primary">Support Policy</a>
																		<!--end::Link-->
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex align-items-center mb-10">
																<!--begin::Icon-->
																<i class="bi bi-chat-square-text-fill text-primary fs-1 me-5"></i>
																<!--end::SymIconbol-->
																<!--begin::Info-->
																<div class="d-flex flex-column">
																	<h5 class="text-gray-800 fw-bolder">More to discuss?</h5>
																	<!--begin::Section-->
																	<div class="fw-bold">
																		<!--begin::Desc-->
																		<span class="text-muted">Email us to</span>
																		<!--end::Desc-->
																		<!--begin::Link-->
																		<a href="#" class="link-primary">support@keenthemes.com</a>
																		<!--end::Link-->
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex align-items-center mb-10">
																<!--begin::Icon-->
																<i class="bi bi-twitter text-primary fs-1 me-5"></i>
																<!--end::SymIconbol-->
																<!--begin::Info-->
																<div class="d-flex flex-column">
																	<h5 class="text-gray-800 fw-bolder">Latest News</h5>
																	<!--begin::Section-->
																	<div class="fw-bold">
																		<!--begin::Desc-->
																		<span class="text-muted">Follow us at</span>
																		<!--end::Desc-->
																		<!--begin::Link-->
																		<a href="#" class="link-primary">KeenThemes Twitter</a>
																		<!--end::Link-->
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex align-items-center">
																<!--begin::Icon-->
																<i class="bi bi-github text-primary fs-1 me-5"></i>
																<!--end::SymIconbol-->
																<!--begin::Info-->
																<div class="d-flex flex-column">
																	<h5 class="text-gray-800 fw-bolder">Github Access</h5>
																	<!--begin::Section-->
																	<div class="fw-bold">
																		<!--begin::Desc-->
																		<span class="text-muted">Our github repo</span>
																		<!--end::Desc-->
																		<!--begin::Link-->
																		<a href="#" class="link-primary">KeenThemes Github</a>
																		<!--end::Link-->
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Info-->
															</div>
															<!--end::Item-->
														</div>
														<!--end::Body-->
													</div>
													<!--end::More channels-->
													<!--begin::Documentations-->
													<div class="card mt-15 bg-primary bg-opacity-5">
														<!--begin::Body-->
														<div class="card-body px-12 py-10">
															<!--begin::Title-->
															<h1 class="fw-bolder text-dark mb-9">Documentation</h1>
															<!--end::Title-->
															<!--begin::Item-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Icon-->
																<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-double-right.svg-->
																<span class="svg-icon svg-icon-2 ms-n1 me-3">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																			<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
																		</g>
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<!--end::Icon-->
																<!--begin::Subtitle-->
																<a href="#" class="fw-bold text-gray-800 text-hover-primary fs-5 m-0">Metronic Admin</a>
																<!--end::Subtitle-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Icon-->
																<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-double-right.svg-->
																<span class="svg-icon svg-icon-2 ms-n1 me-3">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																			<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
																		</g>
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<!--end::Icon-->
																<!--begin::Subtitle-->
																<a href="#" class="fw-bold text-gray-800 text-hover-primary fs-5 m-0">Keen Admin</a>
																<!--end::Subtitle-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Icon-->
																<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-double-right.svg-->
																<span class="svg-icon svg-icon-2 ms-n1 me-3">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																			<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
																		</g>
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<!--end::Icon-->
																<!--begin::Subtitle-->
																<a href="#" class="fw-bold text-gray-800 text-hover-primary fs-5 m-0">Start Dashboard</a>
																<!--end::Subtitle-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Icon-->
																<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-double-right.svg-->
																<span class="svg-icon svg-icon-2 ms-n1 me-3">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																			<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
																		</g>
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<!--end::Icon-->
																<!--begin::Subtitle-->
																<a href="#" class="fw-bold text-gray-800 text-hover-primary fs-5 m-0">Dazer Niche Theme</a>
																<!--end::Subtitle-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Icon-->
																<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-double-right.svg-->
																<span class="svg-icon svg-icon-2 ms-n1 me-3">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																			<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
																		</g>
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<!--end::Icon-->
																<!--begin::Subtitle-->
																<a href="#" class="fw-bold text-gray-800 text-hover-primary fs-5 m-0">Craft Admin</a>
																<!--end::Subtitle-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Icon-->
																<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-double-right.svg-->
																<span class="svg-icon svg-icon-2 ms-n1 me-3">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																			<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
																		</g>
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<!--end::Icon-->
																<!--begin::Subtitle-->
																<a href="#" class="fw-bold text-gray-800 text-hover-primary fs-5 m-0">Dorsey Front-end</a>
																<!--end::Subtitle-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Icon-->
																<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-double-right.svg-->
																<span class="svg-icon svg-icon-2 ms-n1 me-3">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																			<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
																		</g>
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<!--end::Icon-->
																<!--begin::Subtitle-->
																<a href="#" class="fw-bold text-gray-800 text-hover-primary fs-5 m-0">Metronic Admin</a>
																<!--end::Subtitle-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex align-items-center mb-6">
																<!--begin::Icon-->
																<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-double-right.svg-->
																<span class="svg-icon svg-icon-2 ms-n1 me-3">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																			<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
																		</g>
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<!--end::Icon-->
																<!--begin::Subtitle-->
																<a href="#" class="fw-bold text-gray-800 text-hover-primary fs-5 m-0">Decalan Dashbaord</a>
																<!--end::Subtitle-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex align-items-center">
																<!--begin::Icon-->
																<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-double-right.svg-->
																<span class="svg-icon svg-icon-2 ms-n1 me-3">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																			<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
																		</g>
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<!--end::Icon-->
																<!--begin::Subtitle-->
																<a href="#" class="fw-bold text-gray-800 text-hover-primary fs-5 m-0">Start Admin</a>
																<!--end::Subtitle-->
															</div>
															<!--end::Item-->
														</div>
														<!--end::Body-->
													</div>
													<!--end::Documentations-->
												</div>
												<!--end::Sidebar-->
											</div>
											<!--end::Layout-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Container-->
								<!--begin::Modal - Support Center - Create Ticket-->
								<div class="modal fade" id="kt_modal_new_ticket" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-750px">
										<!--begin::Modal content-->
										<div class="modal-content rounded">
											<!--begin::Modal header-->
											<div class="modal-header pb-0 border-0 justify-content-end">
												<!--begin::Close-->
												<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
													<!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
																<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
																<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Close-->
											</div>
											<!--begin::Modal header-->
											<!--begin::Modal body-->
											<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
												<!--begin:Form-->
												<form id="kt_modal_new_ticket_form" class="form" action="#">
													<!--begin::Heading-->
													<div class="mb-13 text-center">
														<!--begin::Title-->
														<h1 class="mb-3">Create Ticket</h1>
														<!--end::Title-->
														<!--begin::Description-->
														<div class="text-gray-400 fw-bold fs-5">If you need more info, please check
														<a href="" class="fw-bolder link-primary">Support Guidelines</a>.</div>
														<!--end::Description-->
													</div>
													<!--end::Heading-->
													<!--begin::Input group-->
													<div class="d-flex flex-column mb-8 fv-row">
														<!--begin::Label-->
														<label class="d-flex align-items-center fs-6 fw-bold mb-2">
															<span class="required">Subject</span>
															<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a subject for your issue"></i>
														</label>
														<!--end::Label-->
														<input type="text" class="form-control form-control-solid" placeholder="Enter your ticket subject" name="subject" />
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row g-9 mb-8">
														<!--begin::Col-->
														<div class="col-md-6 fv-row">
															<label class="required fs-6 fw-bold mb-2">Product</label>
															<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a product" name="product">
																<option value="">Select a product...</option>
																<option value="1">HTML Theme</option>
																<option value="1">Angular App</option>
																<option value="1">Vue App</option>
																<option value="1">React Theme</option>
																<option value="1">Figma UI Kit</option>
																<option value="3">Laravel App</option>
																<option value="4">Blazor App</option>
																<option value="5">Django App</option>
															</select>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-md-6 fv-row">
															<label class="required fs-6 fw-bold mb-2">Assign</label>
															<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="user">
																<option value="">Select a user...</option>
																<option value="1">Karina Clark</option>
																<option value="2">Robert Doe</option>
																<option value="3">Niel Owen</option>
																<option value="4">Olivia Wild</option>
																<option value="5">Sean Bean</option>
															</select>
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row g-9 mb-8">
														<!--begin::Col-->
														<div class="col-md-6 fv-row">
															<label class="required fs-6 fw-bold mb-2">Status</label>
															<select class="form-select form-select-solid" data-control="select2" data-placeholder="Open" data-hide-search="true">
																<option value=""></option>
																<option value="1" selected="selected">Open</option>
																<option value="2">Pending</option>
																<option value="3">Resolved</option>
																<option value="3">Closed</option>
															</select>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-md-6 fv-row">
															<label class="required fs-6 fw-bold mb-2">Due Date</label>
															<!--begin::Input-->
															<div class="position-relative d-flex align-items-center">
																<!--begin::Icon-->
																<div class="symbol symbol-20px me-4 position-absolute ms-4">
																	<span class="symbol-label bg-secondary">
																		<!--begin::Svg Icon | path: icons/duotone/Layout/Layout-grid.svg-->
																		<span class="svg-icon">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<rect fill="#000000" opacity="0.3" x="4" y="4" width="4" height="4" rx="1" />
																					<path d="M5,10 L7,10 C7.55228475,10 8,10.4477153 8,11 L8,13 C8,13.5522847 7.55228475,14 7,14 L5,14 C4.44771525,14 4,13.5522847 4,13 L4,11 C4,10.4477153 4.44771525,10 5,10 Z M11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 L14,7 C14,7.55228475 13.5522847,8 13,8 L11,8 C10.4477153,8 10,7.55228475 10,7 L10,5 C10,4.44771525 10.4477153,4 11,4 Z M11,10 L13,10 C13.5522847,10 14,10.4477153 14,11 L14,13 C14,13.5522847 13.5522847,14 13,14 L11,14 C10.4477153,14 10,13.5522847 10,13 L10,11 C10,10.4477153 10.4477153,10 11,10 Z M17,4 L19,4 C19.5522847,4 20,4.44771525 20,5 L20,7 C20,7.55228475 19.5522847,8 19,8 L17,8 C16.4477153,8 16,7.55228475 16,7 L16,5 C16,4.44771525 16.4477153,4 17,4 Z M17,10 L19,10 C19.5522847,10 20,10.4477153 20,11 L20,13 C20,13.5522847 19.5522847,14 19,14 L17,14 C16.4477153,14 16,13.5522847 16,13 L16,11 C16,10.4477153 16.4477153,10 17,10 Z M5,16 L7,16 C7.55228475,16 8,16.4477153 8,17 L8,19 C8,19.5522847 7.55228475,20 7,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,17 C4,16.4477153 4.44771525,16 5,16 Z M11,16 L13,16 C13.5522847,16 14,16.4477153 14,17 L14,19 C14,19.5522847 13.5522847,20 13,20 L11,20 C10.4477153,20 10,19.5522847 10,19 L10,17 C10,16.4477153 10.4477153,16 11,16 Z M17,16 L19,16 C19.5522847,16 20,16.4477153 20,17 L20,19 C20,19.5522847 19.5522847,20 19,20 L17,20 C16.4477153,20 16,19.5522847 16,19 L16,17 C16,16.4477153 16.4477153,16 17,16 Z" fill="#000000" />
																				</g>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</span>
																</div>
																<!--end::Icon-->
																<!--begin::Datepicker-->
																<input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date" />
																<!--end::Datepicker-->
															</div>
															<!--end::Input-->
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="d-flex flex-column mb-8 fv-row">
														<label class="fs-6 fw-bold mb-2">Description</label>
														<textarea class="form-control form-control-solid" rows="4" name="description" placeholder="Type your ticket description"></textarea>
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="fv-row mb-8">
														<label class="fs-6 fw-bold mb-2">Attachments</label>
														<!--begin::Dropzone-->
														<div class="dropzone" id="kt_modal_create_ticket_attachments">
															<!--begin::Message-->
															<div class="dz-message needsclick align-items-center">
																<!--begin::Icon-->
																<!--begin::Svg Icon | path: icons/duotone/Files/Uploaded-file.svg-->
																<span class="svg-icon svg-icon-3hx svg-icon-primary">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			<path d="M8.95128003,13.8153448 L10.9077535,13.8153448 L10.9077535,15.8230161 C10.9077535,16.0991584 11.1316112,16.3230161 11.4077535,16.3230161 L12.4310522,16.3230161 C12.7071946,16.3230161 12.9310522,16.0991584 12.9310522,15.8230161 L12.9310522,13.8153448 L14.8875257,13.8153448 C15.1636681,13.8153448 15.3875257,13.5914871 15.3875257,13.3153448 C15.3875257,13.1970331 15.345572,13.0825545 15.2691225,12.9922598 L12.3009997,9.48659872 C12.1225648,9.27584861 11.8070681,9.24965194 11.596318,9.42808682 C11.5752308,9.44594059 11.5556598,9.46551156 11.5378061,9.48659872 L8.56968321,12.9922598 C8.39124833,13.2030099 8.417445,13.5185067 8.62819511,13.6969416 C8.71848979,13.773391 8.8329684,13.8153448 8.95128003,13.8153448 Z" fill="#000000" />
																		</g>
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<!--end::Icon-->
																<!--begin::Info-->
																<div class="ms-4">
																	<h3 class="fs-5 fw-bolder text-gray-900 mb-1">Drop files here or click to upload.</h3>
																	<span class="fw-bold fs-7 text-gray-400">Upload up to 10 files</span>
																</div>
																<!--end::Info-->
															</div>
														</div>
														<!--end::Dropzone-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-15 fv-row">
														<!--begin::Wrapper-->
														<div class="d-flex flex-stack">
															<!--begin::Label-->
															<div class="fw-bold me-5">
																<label class="fs-6">Notifications</label>
																<div class="fs-7 text-gray-400">Allow Notifications by Phone or Email</div>
															</div>
															<!--end::Label-->
															<!--begin::Checkboxes-->
															<div class="d-flex align-items-center">
																<!--begin::Checkbox-->
																<label class="form-check form-check-custom form-check-solid me-10">
																	<input class="form-check-input h-20px w-20px" type="checkbox" name="notifications[]" value="email" checked="checked" />
																	<span class="form-check-label fw-bold">Email</span>
																</label>
																<!--end::Checkbox-->
																<!--begin::Checkbox-->
																<label class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input h-20px w-20px" type="checkbox" name="notifications[]" value="phone" />
																	<span class="form-check-label fw-bold">Phone</span>
																</label>
																<!--end::Checkbox-->
															</div>
															<!--end::Checkboxes-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Input group-->
													<!--begin::Actions-->
													<div class="text-center">
														<button type="reset" id="kt_modal_new_ticket_cancel" class="btn btn-white me-3">Cancel</button>
														<button type="submit" id="kt_modal_new_ticket_submit" class="btn btn-primary">
															<span class="indicator-label">Submit</span>
															<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
													</div>
													<!--end::Actions-->
												</form>
												<!--end:Form-->
											</div>
											<!--end::Modal body-->
										</div>
										<!--end::Modal content-->
									</div>
									<!--end::Modal dialog-->
								</div>
								<!--end::Modal - Support Center - Create Ticket-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Content-->
@endsection