<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 19,
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => 20,
                'title' => 'currency_create',
            ],
            [
                'id'    => 21,
                'title' => 'currency_edit',
            ],
            [
                'id'    => 22,
                'title' => 'currency_show',
            ],
            [
                'id'    => 23,
                'title' => 'currency_delete',
            ],
            [
                'id'    => 24,
                'title' => 'currency_access',
            ],
            [
                'id'    => 25,
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => 26,
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => 27,
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => 28,
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => 29,
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => 30,
                'title' => 'income_source_create',
            ],
            [
                'id'    => 31,
                'title' => 'income_source_edit',
            ],
            [
                'id'    => 32,
                'title' => 'income_source_show',
            ],
            [
                'id'    => 33,
                'title' => 'income_source_delete',
            ],
            [
                'id'    => 34,
                'title' => 'income_source_access',
            ],
            [
                'id'    => 35,
                'title' => 'client_status_create',
            ],
            [
                'id'    => 36,
                'title' => 'client_status_edit',
            ],
            [
                'id'    => 37,
                'title' => 'client_status_show',
            ],
            [
                'id'    => 38,
                'title' => 'client_status_delete',
            ],
            [
                'id'    => 39,
                'title' => 'client_status_access',
            ],
            [
                'id'    => 40,
                'title' => 'project_status_create',
            ],
            [
                'id'    => 41,
                'title' => 'project_status_edit',
            ],
            [
                'id'    => 42,
                'title' => 'project_status_show',
            ],
            [
                'id'    => 43,
                'title' => 'project_status_delete',
            ],
            [
                'id'    => 44,
                'title' => 'project_status_access',
            ],
            [
                'id'    => 45,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 46,
                'title' => 'client_create',
            ],
            [
                'id'    => 47,
                'title' => 'client_edit',
            ],
            [
                'id'    => 48,
                'title' => 'client_show',
            ],
            [
                'id'    => 49,
                'title' => 'client_delete',
            ],
            [
                'id'    => 50,
                'title' => 'client_access',
            ],
            [
                'id'    => 51,
                'title' => 'project_create',
            ],
            [
                'id'    => 52,
                'title' => 'project_edit',
            ],
            [
                'id'    => 53,
                'title' => 'project_show',
            ],
            [
                'id'    => 54,
                'title' => 'project_delete',
            ],
            [
                'id'    => 55,
                'title' => 'project_access',
            ],
            [
                'id'    => 56,
                'title' => 'note_create',
            ],
            [
                'id'    => 57,
                'title' => 'note_edit',
            ],
            [
                'id'    => 58,
                'title' => 'note_show',
            ],
            [
                'id'    => 59,
                'title' => 'note_delete',
            ],
            [
                'id'    => 60,
                'title' => 'note_access',
            ],
            [
                'id'    => 61,
                'title' => 'document_create',
            ],
            [
                'id'    => 62,
                'title' => 'document_edit',
            ],
            [
                'id'    => 63,
                'title' => 'document_show',
            ],
            [
                'id'    => 64,
                'title' => 'document_delete',
            ],
            [
                'id'    => 65,
                'title' => 'document_access',
            ],
            [
                'id'    => 66,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 67,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 68,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 69,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 70,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 71,
                'title' => 'client_report_create',
            ],
            [
                'id'    => 72,
                'title' => 'client_report_edit',
            ],
            [
                'id'    => 73,
                'title' => 'client_report_show',
            ],
            [
                'id'    => 74,
                'title' => 'client_report_delete',
            ],
            [
                'id'    => 75,
                'title' => 'client_report_access',
            ],
            [
                'id'    => 76,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 77,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 78,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 79,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 80,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 81,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 82,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 83,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 84,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 85,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 86,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 87,
                'title' => 'expense_create',
            ],
            [
                'id'    => 88,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 89,
                'title' => 'expense_show',
            ],
            [
                'id'    => 90,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 91,
                'title' => 'expense_access',
            ],
            [
                'id'    => 92,
                'title' => 'income_create',
            ],
            [
                'id'    => 93,
                'title' => 'income_edit',
            ],
            [
                'id'    => 94,
                'title' => 'income_show',
            ],
            [
                'id'    => 95,
                'title' => 'income_delete',
            ],
            [
                'id'    => 96,
                'title' => 'income_access',
            ],
            [
                'id'    => 97,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 98,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 99,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 100,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 101,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 102,
                'title' => 'time_management_access',
            ],
            [
                'id'    => 103,
                'title' => 'time_work_type_create',
            ],
            [
                'id'    => 104,
                'title' => 'time_work_type_edit',
            ],
            [
                'id'    => 105,
                'title' => 'time_work_type_show',
            ],
            [
                'id'    => 106,
                'title' => 'time_work_type_delete',
            ],
            [
                'id'    => 107,
                'title' => 'time_work_type_access',
            ],
            [
                'id'    => 108,
                'title' => 'time_project_create',
            ],
            [
                'id'    => 109,
                'title' => 'time_project_edit',
            ],
            [
                'id'    => 110,
                'title' => 'time_project_show',
            ],
            [
                'id'    => 111,
                'title' => 'time_project_delete',
            ],
            [
                'id'    => 112,
                'title' => 'time_project_access',
            ],
            [
                'id'    => 113,
                'title' => 'time_entry_create',
            ],
            [
                'id'    => 114,
                'title' => 'time_entry_edit',
            ],
            [
                'id'    => 115,
                'title' => 'time_entry_show',
            ],
            [
                'id'    => 116,
                'title' => 'time_entry_delete',
            ],
            [
                'id'    => 117,
                'title' => 'time_entry_access',
            ],
            [
                'id'    => 118,
                'title' => 'time_report_create',
            ],
            [
                'id'    => 119,
                'title' => 'time_report_edit',
            ],
            [
                'id'    => 120,
                'title' => 'time_report_show',
            ],
            [
                'id'    => 121,
                'title' => 'time_report_delete',
            ],
            [
                'id'    => 122,
                'title' => 'time_report_access',
            ],
            [
                'id'    => 123,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 124,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 125,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 126,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 127,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 128,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 129,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 130,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 131,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 132,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 133,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 134,
                'title' => 'task_create',
            ],
            [
                'id'    => 135,
                'title' => 'task_edit',
            ],
            [
                'id'    => 136,
                'title' => 'task_show',
            ],
            [
                'id'    => 137,
                'title' => 'task_delete',
            ],
            [
                'id'    => 138,
                'title' => 'task_access',
            ],
            [
                'id'    => 139,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 140,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
