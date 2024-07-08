 @extends('layouts.app')

 <body id="page-top">

     <!-- Page Wrapper -->
     <div id="wrapper" data-aos="fade-up">

         <!-- Sidebar -->
         <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
             @include('layouts.sidebar')
         </ul>
         <!-- End of Sidebar -->

         <!-- Content Wrapper -->
         <div id="content-wrapper" class="d-flex flex-column">

             <!-- Main Content -->
             <div id="content">
                 <br>


                 <!-- Topbar -->
                 {{-- <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                     <!-- Sidebar Toggle (Topbar) -->

                     <!-- Topbar Navbar -->


                 </nav> --}}
                 <!-- End of Topbar -->

                 <!-- Begin Page Content -->
                 <div class="container-fluid">

                     <!-- Page Heading -->

                     <a href="tambah" class="h3 mb-2 text-gray-800">Book List</a>

                     <!-- DataTales Example -->
                     <div class="card shadow mb-4">

                         <div class="card-body">
                             <div>
                                 <a href="book/tambah" class="btn btn-primary">Add Book</a>

                             </div>
                             <br>
                             <div class="table-responsive">
                                 @if (session()->has('success'))
                                     <div class="alert alert-success alert-dismissible fade show" role="alert">
                                         {{ session('success') }}
                                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                         </button>
                                     </div>
                                 @endif
                                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                     <thead class="text-center">
                                         <tr>
                                             <th>No</th>
                                             <th>Tittle</th>
                                             <th>Author</th>
                                             <th>Published Date</th>
                                             <th>Publisher</th>
                                             <th>Stock</th>
                                             <th>Action</th>
                                         </tr>
                                     </thead>
                                     <tbody class="text-center">
                                         @foreach ($book as $item)
                                             <tr>
                                                 <td>{{ $loop->iteration }}</td>
                                                 <td>{{ $item->title }}</td>
                                                 <td>{{ $item->author }}</td>
                                                 <td>{{ $item->published_date }}</td>
                                                 <td>{{ $item->publisher }}</td>
                                                 <td>{{ $item->stock }}</td>
                                                 <td>
                                                     <a href="/book/{{ $item->id }}/edit" class="btn btn-warning"><i
                                                             class="fas fa-cog"></i></a>
                                                     <a href="/book/{{ $item->id }}/hapus" class="btn btn-danger"><i
                                                             class="fas fa-trash"></i></a>
                                                     <a href="" class="btn btn-success"><i
                                                             class="fas fa-print"></i></a>
                                                 </td>
                                             </tr>
                                         @endforeach
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>

                 </div>
                 <!-- /.container-fluid -->

             </div>
             <!-- End of Main Content -->

             <!-- Footer -->
             {{-- <footer class="sticky-footer bg-white">
                 <div class="container my-auto">
                     <div class="copyright text-center my-auto">
                         <span>Copyright &copy; Your Website 2020</span>
                     </div>
                 </div>
             </footer> --}}
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
     {{-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
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
     </div> --}}
