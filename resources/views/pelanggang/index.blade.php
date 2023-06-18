<!DOCTYPE html>
<html lang="en">

<head>
    <title>SB Admin 2 - Blank</title>
    @include('template.head')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('template.left_sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('template.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pelanggan</h6>
                            <a href="{{ route('pelanggang.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Plat Kendaraan</th>
                                            <th>Layanan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($pelanggangs->count() > 0)
                                        @foreach($pelanggangs as $pelanggang)
                                        <tr>
                                            <td class="align-middle">{{$loop->iteration}}</td>
                                            <td class="align-middle">{{$pelanggang->nama}}</td>
                                            <td class="align-middle">{{$pelanggang->no_plat}}</td>
                                            <td class="align-middle">{{$pelanggang->Layanan->layanan}}</td>
                                            <td>
                                                <div class="my-2"></div>
                                                <a href="" class="btn btn-secondary btn-icon-split">
                                                    <span class="text">Detail</span>
                                                </a>
                                                <a href="{{ route('pelanggang.edit', $pelanggang->id)}}" class="btn btn-success btn-icon-split">
                                                    <span class="text">Edit</span>
                                                </a>
                                                <a href="" class="btn btn-danger btn-icon-split">
                                                    <span class="text">Hapus</span>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td class="text-center" colspan="4">Layanan not found</td>
                                        </tr>
                                        @endif
                                    <tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('template.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    @include('template.script')

</body>

</html>
