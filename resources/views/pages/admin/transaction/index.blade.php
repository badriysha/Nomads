@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Location</th>
                            <th>Type</th>
                            <th>Departure Date</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->travel_package->title }}</td>
                            <td>{{ $item->travel_package->location }}</td>
                            <td>{{ $item->travel_package->type }}</td>
                            <td>{{ $item->travel_package->departure_date }}</td>
                            <td>{{ $item->transaction_status }}</td>
                            <td>
                                <a href="{{ route('transaction.show', $item->id) }}" class="btn btn-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('transaction.edit', $item->id) }}" class="btn btn-info">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('transaction.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                    <button class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr> 
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">
                                    Data Kosong
                                </td>
                            </tr>
                        @endforelse
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
