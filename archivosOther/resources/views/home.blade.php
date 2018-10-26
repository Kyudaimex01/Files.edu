@extends('layouts.header')

@section('content')

<div class="site-inner">
    <div class="content-sidebar-wrap">
        <main class="content">
            <div id="front-page-1" class="front-page-1" style="background: none;" >
                <div class="image-section">
                    <div class="flexible-widgets widget-area widget-full">
                        <div class="wrap">
                            <section class="welcome2 p-t-40 p-b-55">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="au-breadcrumb3">
                                                <div class="au-breadcrumb-left">
                                                    <h3>Panel de Usuario</h3>
                                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                                        <li class="list-inline-item">Panel de Usuario</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="welcome2-inner m-t-60">
                                                <div class="welcome2-greeting">
                                                    <h1 class="title-6">Hola
                                                        <span>{{ Auth::user()->name }}</span>, Bienvenido</h1>
                                                    <p></p>
                                                </div>
                                                <form class="form-header form-header2" action="" method="post">
                                                    <input class="au-input au-input--w435" type="text" name="search" placeholder="Buscar datos o reportes...">
                                                    <button class="au-btn--submit" type="submit">
                                                        <i class="zmdi zmdi-search"></i>
                                                    </button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- END WELCOME-->

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<hr>
<div class="container">
    <div class="row">
            <div class="col-xl-3">
                    <!-- MENU SIDEBAR-->
                    <aside class="menu-sidebar3 js-spe-sidebar">
                        <nav class="navbar-sidebar2 navbar-sidebar3">
                            <ul class="list-unstyled navbar__list">
                                <li>
                                    <a href="/news">
                                        <i class="fas fa-newspaper"></i>Noticias</a>
                                        <span class="inbox-num">3</span>
                                </li>

                                <li class="active has-sub">
                                    <a class="js-arrow" href="#">
                                        <i class="fas fa-"></i>Administrar Contenido
                                        <span class="arrow">
                                            <i class="fas fa-angle-down"></i>
                                        </span>
                                    </a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        <li>
                                            <a href="index.html">
                                                <i class="fas fa-file-image"></i>Im&aacute;genes</a>
                                        </li>
                                        <li>
                                            <a href="index.html">
                                                <i class="fas fa-file-video"></i>Videos</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/users">
                                        <i class="fas fa-user-check"></i>Usuarios</a>
                                    <span class="inbox-num">3</span>
                                </li>

                            </ul>
                        </nav>
                    </aside>
                    <!-- END MENU SIDEBAR-->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE-->
                        <section class="p-t-20">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                    <h3 class="title-5 m-b-35">Listado de Noticias</h3>
                                    <div class="table-data__tool">
                                        <div class="table-data__tool-left">
                                            <div class="rs-select2--light rs-select2--md">
                                                <select class="js-select2" name="property">
                                                    <option selected="selected">All Properties</option>
                                                    <option value="">Option 1</option>
                                                    <option value="">Option 2</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                            <div class="rs-select2--light rs-select2--sm">
                                                <select class="js-select2" name="time">
                                                    <option selected="selected">Today</option>
                                                    <option value="">3 Days</option>
                                                    <option value="">1 Week</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                            <button class="au-btn-filter">
                                                <i class="zmdi zmdi-filter-list"></i>filters</button>
                                        </div>
                                        <div class="table-data__tool-right">
                                            <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                                <i class="zmdi zmdi-plus"></i>add item</button>
                                            <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                                <select class="js-select2" name="type">
                                                    <option selected="selected">Export</option>
                                                    <option value="">Option 1</option>
                                                    <option value="">Option 2</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive table-responsive-data2">
                                        <table class="table table-data2">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </th>
                                                    <th>Titulo</th>
                                                    <th>Descripcion</th>
                                                    <th>Autor</th>
                                                    <th>Fecha</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($notices as $notice)
                                                    @if($size > 0)
                                                    <tr class="tr-shadow">
                                                        <td>
                                                            <label class="au-checkbox">
                                                                <input type="checkbox">
                                                                <span class="au-checkmark"></span>
                                                            </label>
                                                        </td>
                                                        <td>{{ $notice->title }}</td>
                                                        <td>
                                                            <span class="block-email">{{ $notice->description }}</span>
                                                        </td>
                                                        <td class="desc">{{ $notice->posted_by }}</td>
                                                        <td>{{ $notice->created_at }}</td>
                                                        <td>
                                                            <span class="status--process">Processed</span>
                                                        </td>
                                                        <td>
                                                            <div class="table-data-feature">
                                                                <a class="item" data-toggle="modal" data-target="#updateModal" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </a>
                                                                <form action="{{ action('NoticeController@destroy', $notice['id']) }}" method="POST">
                                                                    @csrf
                                                                    <input name="_method" type="hidden" value="DELETE">
                                                                    <button class="item" type="submit" data-placement="top" title="Delete">
                                                                        <i class="zmdi zmdi-delete"></i>
                                                                    </button>
                                                                </form>

                                                                <a class="item" data-toggle="modal" data-target="#previewModal" data-placement="top" title="Preview">
                                                                    <i class="zmdi zmdi-play-circle"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="spacer"></tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- END DATA TABLE-->
                </div>
            </div>
        </div>
    </div>
<!-- modal update -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Medium Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    There are three species of zebras: the plains zebra, the mountain zebra and the Grévy's zebra. The plains zebra and the mountain
                    zebra belong to the subgenus Hippotigris, but Grévy's zebra is the sole species of subgenus Dolichohippus. The latter
                    resembles an ass, to which it is closely related, while the former two are more horse-like. All three belong to the
                    genus Equus, along with other living equids.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Confirm</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal update -->
<!-- modal preview -->
<div class="modal fade" id="previewModal" tabindex="-1" role="dialog" aria-labelledby="previewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="previewModalLabel">Medium Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    There are three species of zebras: the plains zebra, the mountain zebra and the Grévy's zebra. The plains zebra and the mountain
                    zebra belong to the subgenus Hippotigris, but Grévy's zebra is the sole species of subgenus Dolichohippus. The latter
                    resembles an ass, to which it is closely related, while the former two are more horse-like. All three belong to the
                    genus Equus, along with other living equids.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Confirm</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal medium -->
@endsection
