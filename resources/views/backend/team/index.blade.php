@extends('backend.layouts.app')

@section('title', 'Team')

@section('content')
    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">all teams</header>
                    <div class="tools">
                        <a class="btn btn-primary ink-reaction" href="{{ route('team.create') }}">
                            <i class="md md-add"></i>
                            Add
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="60%">Name</th>
                            <th width="20%" class="text-center">Designation</th>
                            <th width="15%" class="text-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($teams as $key => $team)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{ str_limit($team->name, 47) }}</td>
                                <td>{{ str_limit($team->designation, 47) }}</td>
                                <td class="text-right">
                                    <a href="{{route('team.edit', $team->id)}}" class="btn btn-flat btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <button type="button" data-url="{{ route('team.destroy', $team->id) }}" class="btn btn-flat btn-primary btn-xs item-delete">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">No teams available.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@stop