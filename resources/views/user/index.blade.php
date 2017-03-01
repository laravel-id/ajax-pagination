@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Users</div>
				<div class="panel-body">

					<div class="row">
						<div class="col-md-4">
							<!-- pagination links -->	
							<nav v-cloak>
								<ul class="pagination">
									<li v-if="users.prev_page_url">
										<a @click.prevent="getUsers(users.prev_page_url)" :href="users.prev_page_url">@lang('pagination.previous')</a>
									</li>
									<li v-if="users.next_page_url">
										<a @click.prevent="getUsers(users.next_page_url)" :href="users.next_page_url">@lang('pagination.next')</a>
									</li>
								</ul>	
							</nav>
						</div>

						<div class="col-md-8 text-right">
							Display from @{{ users.from }} to @{{ users.to }} of @{{ users.total }} data.
						</div>
					</div>

					<div class="table-responsive">
						<table class="table table-striped" v-cloak>
							<thead>
								<th>Email</th>
								<th>Created</th>
								<th>Updated</th>
								<th>Actions</th>
							</thead>

							<tbody>
								<tr v-for="(user, index) in users.data">
									<td>@{{ user.email }}</td>
									<td>@{{ user.created_at }}</td>
									<td>@{{ user.updated_at }}</td>
									<td>
										<button class="btn btn-info btn-xs">Edit</button>
										<button class="btn btn-danger btn-xs">Delete</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>

					<!-- pagination links -->	
					<nav v-cloak>
						<ul class="pagination">
							<li v-if="users.prev_page_url">
								<a @click.prevent="getUsers(users.prev_page_url)" :href="users.prev_page_url">@lang('pagination.previous')</a>
							</li>
							<li v-if="users.next_page_url">
								<a @click.prevent="getUsers(users.next_page_url)" :href="users.next_page_url">@lang('pagination.next')</a>
							</li>
						</ul>	
					</nav>

				</div>	
			</div>
		</div>	
	</div>
</div>

@endsection