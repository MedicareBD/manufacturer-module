<div class="btn-group btn-group-sm">
    @can('manufacturer-update')
        <a href="{{ route('admin.manufacturer.edit', $id) }}" class="btn btn-success">
            <i class="fas fa-edit"></i>
        </a>
    @endcan
    @can('manufacturer-delete')
            <a href="{{ route('admin.manufacturer.destroy', $id) }}" class="btn btn-danger confirm-delete">
                <i class="fas fa-trash"></i>
            </a>
    @endcan
</div>
