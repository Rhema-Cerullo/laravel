<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'role-print',
            'role-search',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'user-print',
            'user-search',
            'template-list',
            'template-create',
            'template-edit',
            'template-delete',
            'template-print',
            'template-search',
            'file-list',
            'file-create',
            'file-edit',
            'file-delete',
            'file-print',
            'file-search',
            'file-transfer',
            'validate-file',
            'logfile-list',
            'logfile-print',
            'logfile-search',
            'logfile-delete',
            'meeting-list',
            'meeting-create',
            'meeting-edit',
            'meeting-delete',
            'meeting-print',
            'meeting-search',
            'meeting-join',
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
