@include('layouts.components.head')

    <!-- BEGIN: Header-->
@include('layouts.components.navigation')
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a href="javascript:void(0);">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="{{ URL::asset('app-assets/images/icons/xls.png') }}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="{{ URL::asset('app-assets/images/icons/jpg.png') }}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="{{ URL::asset('app-assets/images/icons/pdf.png') }}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="mr-75"><img src="{{ URL::asset('app-assets/images/icons/doc.png') }}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a href="javascript:void(0);">
                <h6 class="section-label mt-75 mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="{{ URL::asset('app-assets/images/portrait/small/avatar-s-8.jpg') }}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="{{ URL::asset('app-assets/images/portrait/small/avatar-s-1.jpg') }}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="{{ URL::asset('app-assets/images/portrait/small/avatar-s-14.jpg') }}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-75"><img src="{{ URL::asset('app-assets/images/portrait/small/avatar-s-6.jpg') }}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="mr-75" data-feather="alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="horizontal-menu-wrapper">
        <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="#"><span class="brand-logo">
                                <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                    <defs>
                                        <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                            <stop stop-color="#000000" offset="0%"></stop>
                                            <stop stop-color="#FFFFFF" offset="100%"></stop>
                                        </lineargradient>
                                        <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                            <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                            <stop stop-color="#FFFFFF" offset="100%"></stop>
                                        </lineargradient>
                                    </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                            <g id="Group" transform="translate(400.000000, 178.000000)">
                                                <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                                <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                                <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                                <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                                <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                            </g>
                                        </g>
                                    </g>
                                </svg></span>
                            <h2 class="brand-text mb-0">Vuexy</h2>
                        </a></li>
                    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i></a></li>
                </ul>
            </div>
            <div class="shadow-bottom"></div>
            <!-- Horizontal menu content-->
            <div class="navbar-container main-menu-content" data-menu="menu-container">
              
            </div>
        </div>
    </div>
    <!-- END: Main Menu-->

   <!-- BEGIN: Content-->
   <div class="app-content content todo-application">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-area-wrapper">
            <div class="sidebar-left">
                <div class="sidebar">
                    <div class="sidebar-content todo-sidebar">
                        <div class="todo-app-menu">
                            
                            <div class="add-task">

                                <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#new-task-modal">
                                    Criar Chamado
                                </button>
 
                                <!-- <h1 class="text-danger"><em>Atendimento</em></h1>  -->
                            </div>

                            <div class="sidebar-menu-list">
                                <div class="list-group list-group-filters">
                                    <a href="javascript:void(0)" class="list-group-item list-group-item-action active">
                                        <i data-feather="list" class="font-medium-3 mr-50"></i>
                                        <span class="align-middle"> Principal</span>
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                                        <i data-feather="star" class="font-medium-3 mr-50"></i> <span class="align-middle">Importantes</span>
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                                        <i data-feather="check" class="font-medium-3 mr-50"></i> <span class="align-middle">Finalizados</span>
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                                        <i data-feather="trash" class="font-medium-3 mr-50"></i> <span class="align-middle">Removidos</span>
                                    </a>
                                </div>
                                <div class="mt-3 px-2 d-flex justify-content-between">
                                    <h6 class="section-label mb-1">Prioridade</h6>
                                    <i data-feather="plus" class="cursor-pointer"></i>
                                </div>
                                <div class="list-group list-group-labels">
                                    <a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex align-items-center">
                                        <span class="bullet bullet-sm bullet-primary mr-1"></span>Pessoal
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex align-items-center">
                                        <span class="bullet bullet-sm bullet-success mr-1"></span>Baixa
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex align-items-center">
                                        <span class="bullet bullet-sm bullet-warning mr-1"></span>Média
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex align-items-center">
                                        <span class="bullet bullet-sm bullet-danger mr-1"></span>Alta
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex align-items-center">
                                        <span class="bullet bullet-sm bullet-info mr-1"></span>Atualizações
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="content-right">
                <div class="content-wrapper">
                    <div class="content-header row">
                    </div>
                    <div class="content-body">
                        <div class="body-content-overlay"></div>
                        <div class="todo-app-list">
                            <!-- Todo search starts -->
                            <div class="app-fixed-search d-flex align-items-center">
                                <div class="sidebar-toggle d-block d-lg-none ml-1">
                                    <i data-feather="menu" class="font-medium-5"></i>
                                </div>
                                <div class="d-flex align-content-center justify-content-between w-100">
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="todo-search" placeholder="Pesquisar" aria-label="Search..." aria-describedby="todo-search" />
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle hide-arrow mr-1" id="todoActions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i data-feather="more-vertical" class="font-medium-2 text-body"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="todoActions">
                                        <a class="dropdown-item sort-asc" href="javascript:void(0)">Sort A - Z</a>
                                        <a class="dropdown-item sort-desc" href="javascript:void(0)">Sort Z - A</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Sort Assignee</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Sort Due Date</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Sort Today</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Sort 1 Week</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Sort 1 Month</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Todo search ends -->

                            <!-- Todo List starts -->
                            <div class="todo-task-list-wrapper list-group">




                                <?php if(!empty($dados)): ?>
                                <ul class="todo-task-list media-list" id="todo-task-list">
                                    <?php foreach($dados as $dado): ?>
                                        <li class="todo-item">
                                            <div class="todo-title-wrapper">
                                                <div class="todo-title-area">
                                                    <i data-feather="more-vertical" class="drag-icon"></i>
                                                    <div class="title-wrapper">
                                        <!-- 
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck3" />
                                                            <label class="custom-control-label" for="customCheck3"></label>
                                                        </div> 
                                        -->
                                                        <span class="todo-title">{{ $dado['titulo'] }}</span>
                                                    </div>
                                                </div>
                                                <div class="todo-item-action">
                                                    <div class="badge-wrapper mr-1">
                                                        <!-- 
                                                            <div class="badge badge-pill badge-light-info">Update</div>
                                                        -->

                                                        <div class="badge badge-pill badge-light-warning">{{$dado['prioridade_atendimento']}}</div> 

                                                    
                                                    </div>
                                                    <small class="text-nowrap text-muted mr-1">{{$dado['data_abertura']}}</small>
                                                    <div class="avatar">
                                                        <img src="{{ URL::asset('app-assets/images/portrait/small/avatar-s-5.jpg') }}" alt="user-avatar" height="32" width="32" />
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    <?php endforeach; ?>
<!--                                                                       
                                    <li class="todo-item completed">
                                        <div class="todo-title-wrapper">
                                            <div class="todo-title-area">
                                                <i data-feather="more-vertical" class="drag-icon"></i>
                                                <div class="title-wrapper">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck11" checked />
                                                        <label class="custom-control-label" for="customCheck11"></label>
                                                    </div>
                                                    <span class="todo-title">Pick up Nats from her school and drop at dance class😁 </span>
                                                </div>
                                            </div>
                                            <div class="todo-item-action">
                                                <small class="text-nowrap text-muted mr-1">Aug 17</small>
                                                <div class="avatar bg-light-primary">
                                                    <div class="avatar-content">PK</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li> 
-->

                                </ul>
                                <?php else: ?>
                                    <div class="no-results">
                                        <h5>Nenhum dado encontrado</h5>
                                    </div>

                                <?php endif; ?>
                            </div>
                            <!-- Todo List ends -->
                        </div>

                        <!-- Right Sidebar starts -->
                        <div class="modal modal-slide-in sidebar-todo-modal fade" id="new-task-modal">
                            <div class="modal-dialog sidebar-lg">
                                <div class="modal-content p-0">
                                    <form id="form-modal-todo" class="todo-modal needs-validation" novalidate onsubmit="return false">
                                        <div class="modal-header align-items-center mb-1">
                                            <h5 class="modal-title">Novo chamado</h5>
                                            <div class="todo-item-action d-flex align-items-center justify-content-between ml-auto">
                                                <span class="todo-item-favorite cursor-pointer mr-75"><i data-feather="star" class="font-medium-2"></i></span>
                                                <button type="button" class="close font-large-1 font-weight-normal py-0" data-dismiss="modal" aria-label="Close">
                                                    ×
                                                </button>
                                            </div>
                                        </div>
                                        <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                                            <div class="action-tags">
                                                <div class="form-group">
                                                    <label for="todoTitleAdd" class="form-label">Titulo</label>
                                                    <input type="text" id="todoTitleAdd" name="todoTitleAdd" class="new-todo-item-title form-control" placeholder="Titulo" />
                                                </div>


                                                <div class="form-group">
                                                    <label class="form-label">Descrição</label>
                                                    <div id="task-desc" class="border-bottom-0" data-placeholder="Descrição do chamado"></div>
                                                    <div class="d-flex justify-content-end desc-toolbar border-top-0">
                                                        <span class="ql-formats mr-0">
                                                            <button class="ql-bold"></button>
                                                            <button class="ql-italic"></button>
                                                            <button class="ql-underline"></button>
                                                            <button class="ql-align"></button>
                                                            <button class="ql-link"></button>
                                                        </span>
                                                    </div>
                                                </div>                                                



                                                <div class="form-group position-relative">
                                                    <label for="task-assigned" class="form-label d-block">Tipo de Solicição</label>
                                                    <select class="select2 form-control" id="task-assigned" name="tipo_atendimento">

                                                        <option value="0" selected>---</option>
                                                        <option value="1">Reclamação</option>
                                                        <option value="2">Dúvidas</option>

                                                    </select>
                                                </div> 



                                                <div class="form-group position-relative">
                                                    <label for="task-assigned" class="form-label d-block">Prioridade</label>
                                                    <select class="select2 form-control" id="task-assigned" name="prioridade_atendido">

                                                        <option value="0" selected>---</option>
                                                        <option value="1">Baixa</option>
                                                        <option value="2">Média</option>
                                                        <option value="3">Alta</option>

                                                    </select>
                                                </div>

                                            </div>
                                            <div class="form-group my-1">
                                                <button type="submit" class="btn btn-success d-none add-todo-item mr-1">Cadastrar</button>
                                                <button type="button" class="btn btn-outline-secondary add-todo-item d-none" data-dismiss="modal">
                                                    Cancelar
                                                </button>
                                                <button type="button" class="btn btn-warning d-none update-btn update-todo-item mr-1">Atualizar</button>
                                                <button type="button" class="btn btn-outline-danger update-btn d-none" data-dismiss="modal">Deletar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Right Sidebar ends -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->



@include('layouts.components.footer')