<?php

namespace App\DataTables;

use App\Models\Login;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class LoginDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->addColumn('action', 'login.action')
            ->editColumn('action', function ($query) {
                return view('components.approve_button', compact('query'));
                // return "<form action='" . route('admin.login_manager_approve', $query->id) . "method='POST'> " . csrf_field() . "<button type='submit' class='btn btn-success'><i class='bi bi-check'></i>Izinkan login</button></form>";
            })
            ->editColumn('allow_auth_status', function ($query) {
                return ($query->allow_auth_status == 1 ? '<span class="btn btn-success">Allowed</span>' : '<span class="btn btn-secondary">Need Approve</span>');
            })
            ->rawColumns(['allow_auth_status', 'action'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(User $model): QueryBuilder
    {
        return $model->where('name', '!=', 'Admin KPR')->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('login-table')
            ->columns($this->getColumns())
            //->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            ]);
    }


    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            'DT_RowIndex' => ['title' => '#', 'searchable' => false],
            'name' => ['title' => 'Nama'],
            'email' => ['title' => 'Email'],
            'nim' => ['title' => 'NIM'],
            'year' => ['title' => 'Tahun Angkatan'],
            'allow_auth_status' => ['title' => 'Status Login'],
            'major' => ['title' => 'Jurusan'],
            'action' => ['printable' => false, 'exportable' => false]
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Login_' . date('YmdHis');
    }
}
