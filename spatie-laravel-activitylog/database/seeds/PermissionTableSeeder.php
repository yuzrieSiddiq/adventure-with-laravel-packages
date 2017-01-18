<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('permissions')->insert([
            /**
             * Student Permissions
             */
            [
                'id'         => '1',
                'name'       => 'add_unit_reenrolment',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '2',
                'name'       => 'drop_unit_reenrolment',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '3',
                'name'       => 'add_unit_amendment',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '4',
                'name'       => 'drop_unit_amendment',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '5',
                'name'       => 'view_manageunit',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //
            [
                'id'         => '6',
                'name'       => 'submit_coursetransfer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '7',
                'name'       => 'submit_exemption',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '8',
                'name'       => 'submit_leaveofabsence',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '9',
                'name'       => 'submit_preclusion',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '10',
                'name'       => 'submit_amendment',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            /** end Student Permissions **/
            /**
             * Coordinator Permissions
             */
            [
                'id'         => '11',
                'name'       => 'track_units',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '12',
                'name'       => 'create_study_planner_entry',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '13',
                'name'       => 'update_study_planner_entry',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '14',
                'name'       => 'delete_study_planner_entry',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '15',
                'name'       => 'create_units_offered_entry',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //
            [
                'id'         => '16',
                'name'       => 'update_units_offered_entry',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '17',
                'name'       => 'delete_units_offered_entry',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '18',
                'name'       => 'create_unit',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '19',
                'name'       => 'update_unit',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '20',
                'name'       => 'delete_unit',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '21',
                'name'       => 'approve_amendment',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '22',
                'name'       => 'disapprove_amendment',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '23',
                'name'       => 'approve_submitted_issues',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '24',
                'name'       => 'disapprove_submitted_issues',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '25',
                'name'       => 'add_graduation_requirement',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '26',
                'name'       => 'update_graduation_requirement',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '27',
                'name'       => 'delete_graduation_requirement',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            /** end Coordinator Permissions **/
            /**
             * SuperAdmin Permissions
             */
            [
                'id'         => '28',
                'name'       => 'update_users_details',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '29',
                'name'       => 'add_permission_to_role',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '30',
                'name'       => 'add_role_to_user',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '31',
                'name'       => 'create_unit_type',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '32',
                'name'       => 'update_unit_type',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '33',
                'name'       => 'delete_unit_type',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '34',
                'name'       => 'create_course',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '35',
                'name'       => 'udpate_course',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '36',
                'name'       => 'delete_course',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '37',
                'name'       => 'update_configuration',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            /** end SuperAdmin Permissions **/
            /**
             * Admin Permissions
             */
            [
                'id'         => '38',
                'name'       => 'update_enrolment_phase',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '39',
                'name'       => 'update_units_approval',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '40',
                'name'       => 'generate_student_report_table',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '41',
                'name'       => 'generate_student_report_chart',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '42',
                'name'       => 'import_student_records_xlsx',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '43',
                'name'       => 'approve_leave_of_absence',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '44',
                'name'       => 'disapprove_leave_of_absence',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id'         => '45',
                'name'       => 'view_student_status',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            /** end Admin Permissions **/
        ]);
    }
}
