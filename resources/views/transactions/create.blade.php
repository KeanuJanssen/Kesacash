@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Transaction</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('transactions.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                                <label for="name">name:</label>
                                <input class="form-control" type="text" name="name" id="name" placeholder="Type name here" required>
                            </div>

                            <div class="form-group">
                                <label for="name">Description:</label>
                                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Type description here (not required)"></textarea>
                            </div>

                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="negative" name="negative">
                                <label class="form-check-label" for="negative">Negative amount</label>
                            </div>
                            
                            <div class="form-group">
                                <label for="name">Amount:</label>
                                <input class="form-control" type="text" name="amount" id="amount" placeholder="Type amount here" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Create transaction</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection