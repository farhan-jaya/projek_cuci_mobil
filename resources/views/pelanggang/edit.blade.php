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
                             <h6 class="m-0 font-weight-bold text-primary">Edit Layanan</h6>
                             <hr />
                             <form action="{{ route('pelanggang.update', $pelanggangs->id) }}" method="POST">
                                 @csrf
                                 @method('PUT')
                                 <div class="row mb-3">
                                     <div class="col">
                                         <input type="text" name="nama" class="form-control" placeholder="Layanan" value="{{ $pelanggangs->nama }}">
                                     </div>
                                 </div>
                                 <div class="row mb-3">
                                     <div class="col">
                                         <input type="text" name="no_plat" class="form-control" placeholder="Biaya" value="{{ $pelanggangs->no_plat }}">
                                     </div>
                                 </div>
                                 <div class="row mb-3">
                                     <select class="form-control select2" style="width: 100%;" name="layanan_id" id="layanan_id">
                                         <option disabled value>Pilih Layanan</option>
                                         @foreach($layanans as $layanan)
                                         <option value={{ $layanan->id }}>{{ $layanan->layanan }}</option>
                                         @endforeach
                                     </select>
                                 </div>
                                 <div class="row">
                                     <div class="d-grid">
                                         <button class="btn btn-warning">Update</button>
                                     </div>
                                 </div>
                             </form>
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
