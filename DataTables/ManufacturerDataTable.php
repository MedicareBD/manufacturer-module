<?php

namespace Modules\Manufacturer\DataTables;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class ManufacturerDataTable extends DataTable
{
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->editColumn('created_at', fn($model) => format_date($model->created_at))
            ->addColumn('action', 'manufacturer::action')
            ->setRowId('id');
    }

    public function query(User $model): QueryBuilder
    {
        return $model->manufacturersScope()->newQuery();
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('manufacturer-datatable-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom(config('custom.table.dom'))
            ->orderBy(1)
            ->stateSave()
            ->autoWidth()
            ->responsive()
            ->addTableClass(config('custom.table.class'))
            ->parameters([
                'scrollY' => true,
            ]);
    }

    protected function getColumns(): array
    {
        return [
            Column::make('id')
                ->data('DT_RowIndex')
                ->printable(false)
                ->exportable(false)
                ->orderable(false)
                ->title('#'),
            Column::make('name')->title(__("Manufacturer Name")),
            Column::make('address')->title(__("Address 1")),
            Column::make('mobile')->title(__("Mobile")),
            Column::make('email')->title(__("Email")),
            Column::make('city')->title(__("City")),
            Column::make('state')->title(__("State")),
            Column::make('zip')->title(__("ZIP")),
            Column::make('country')->title(__("Country")),
            Column::make('created_at')->title(__("Created At")),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->orderable(false)
                ->width(60)
                ->addClass('text-center')
                ->title('Action'),
        ];
    }

    protected function filename(): string
    {
        return 'Customers_' . date('YmdHis');
    }
}
