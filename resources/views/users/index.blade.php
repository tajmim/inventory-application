@extends('master')

@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>User List</h4>
                <h6>Manage your User</h6>
            </div>
            <div class="page-btn">
                <a href="{{ route('users.create') }}" class="btn btn-added"><img src="assets/img/icons/plus.svg"
                        alt="img">Add User</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">

                <div class="table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <table class="table datanew dataTable no-footer" id="DataTables_Table_0" role="grid"
                            aria-describedby="DataTables_Table_0_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1"
                                        aria-label="
    
    
    
    
    : activate to sort column ascending"
                                        style="width: 63.475px;">
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="User name : activate to sort column ascending"
                                        style="width: 113.975px;">User name </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="Phone: activate to sort column ascending"
                                        style="width: 117.05px;">Email</th>
                                    <th class="sorting_desc" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" aria-label="email: activate to sort column ascending"
                                        aria-sort="descending" style="width: 130.4px;">Email Verified</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="Role: activate to sort column ascending"
                                        style="width: 125.037px;">Role</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="Created On: activate to sort column ascending"
                                        style="width: 119.312px;">Created On</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                        colspan="1" aria-label="Created On: activate to sort column ascending"
                                        style="width: 119.312px;">Active</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $usr)
                                    <tr class="odd">
                                        <td class="">
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        <td>{{ $usr->name }}</td>
                                        <td class="">{{ $usr->email }}</td>
                                        <td class="sorting_1">
                                            {{ $usr->email_verified_at ? 'YES' : 'NO' }}
                                        </td>
                                        <td>Manager </td>
                                        <td>{{ $usr->created_at }}</td>
                                        <td>
                                            <!-- edit Button -->
                                            <a class="me-3" href="{{ route('users.edit', $usr->id) }}">
                                                <img src="assets/img/icons/edit.svg" alt="img">
                                            </a>
                                            <!-- Delete Button -->
                                            <form action="{{ route('users.destroy', $usr->id) }}" method="POST"
                                                style="display:inline;"
                                                onsubmit="return confirm('Are you sure you want to delete this user?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" style="border: none; background: none; padding: 0;">
                                                    <img src="{{ asset('assets/img/icons/delete.svg') }}" alt="Delete">
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="dataTables_length" id="DataTables_Table_0_length"><label><select
                                    name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                                    class="custom-select custom-select-sm form-control form-control-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select></label></div>
                        <div class="dataTables_paginate paging_numbers" id="DataTables_Table_0_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item active"><a href="#"
                                        aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0"
                                        class="page-link">1</a></li>
                                <li class="paginate_button page-item "><a href="#"
                                        aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0"
                                        class="page-link">2</a></li>
                            </ul>
                        </div>
                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">1 -
                            10 of 14 items</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection()
