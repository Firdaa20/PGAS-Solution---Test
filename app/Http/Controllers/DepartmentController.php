<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    /**
     * Menampilkan semua department + fitur search.
     */
    public function index(Request $request)
    {
        $search = $request->input('search', '');

        $departments = DB::select(
            "
            SELECT
                department_id,
                department_name,
                created_at,
                updated_at
            FROM departments
            WHERE department_name LIKE ?
            ORDER BY department_name ASC
            ",
            ['%' . $search . '%']
        );

        return view('departments.index', compact(
            'departments',
            'search'
        ));
    }

    /**
     * Form tambah department.
     */
    public function create()
    {
        return view('departments.create');
    }

    /**
     * Simpan department baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'department_name' => 'required|string|max:100',
        ]);

        DB::insert(
            "
            INSERT INTO departments
            (
                department_name,
                created_at,
                updated_at
            )
            VALUES
            (
                ?,
                NOW(),
                NOW()
            )
            ",
            [
                $request->department_name
            ]
        );

        return redirect()
            ->route('departments.index')
            ->with(
                'success',
                'Department berhasil ditambahkan.'
            );
    }

    /**
     * Form edit department.
     */
    public function edit($department_id)
    {
        $department = DB::selectOne(
            "
            SELECT
                department_id,
                department_name
            FROM departments
            WHERE department_id = ?
            ",
            [$department_id]
        );

        abort_if(!$department, 404);

        return view(
            'departments.edit',
            compact('department')
        );
    }

    /**
     * Update department.
     */
    public function update(
        Request $request,
        $department_id
    ) {
        $request->validate([
            'department_name' => 'required|string|max:100',
        ]);

        DB::update(
            "
            UPDATE departments
            SET
                department_name = ?,
                updated_at = NOW()
            WHERE department_id = ?
            ",
            [
                $request->department_name,
                $department_id
            ]
        );

        return redirect()
            ->route('departments.index')
            ->with(
                'success',
                'Department berhasil diperbarui.'
            );
    }

    /**
     * Hapus department.
     */
    public function destroy($department_id)
    {
        DB::delete(
            "
            DELETE FROM departments
            WHERE department_id = ?
            ",
            [$department_id]
        );

        return redirect()
            ->route('departments.index')
            ->with(
                'success',
                'Department berhasil dihapus.'
            );
    }
}