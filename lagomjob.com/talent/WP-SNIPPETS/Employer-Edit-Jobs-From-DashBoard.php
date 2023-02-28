add_filter( 'job_manager_get_dashboard_jobs_args', function( $job_dashboard_args ) {
	$user  = wp_get_current_user();
	$roles = ( array ) $user->roles;

	if ( ! empty( $roles ) && in_array( 'employer', $roles, true ) ) {
		unset( $job_dashboard_args['author'] );
	}

	return $job_dashboard_args;
} );
