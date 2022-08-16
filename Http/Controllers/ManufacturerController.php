<?php

namespace Modules\Manufacturer\Http\Controllers;

use App\Models\User;
use Illuminate\Routing\Controller;
use Modules\Manufacturer\DataTables\BackupDataTable;
use Modules\Manufacturer\Http\Requests\StoreManufacturerRequest;
use Modules\Manufacturer\Http\Requests\UpdateManufacturerRequest;

class ManufacturerController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:manufacturer-create')->only('create', 'store');
        $this->middleware('permission:manufacturer-read')->only('index', 'show');
        $this->middleware('permission:manufacturer-update')->only('edit', 'update');
        $this->middleware('permission:manufacturer-delete')->only('destroy');
    }

    public function index(BackupDataTable $dataTable)
    {
        return $dataTable->render('manufacturer::index');
    }

    public function create()
    {
        return view('manufacturer::create');
    }

    public function store(StoreManufacturerRequest $request)
    {
        $validated = $request->validated();
        $manufacturer = User::create([
            'name' => $validated['manufacturer_name'],
            'email' => $validated['manufacturer_email'],
            'password'=> bcrypt('password'),
            'avatar' => 'https://avatars.dicebear.com/api/adventurer/'.str($validated['manufacturer_name'])->slug().'.svg',
            'mobile' => $validated['manufacturer_mobile'],
            'phone' => $validated['phone'],
            'secondary_email' => $validated['secondary_email'],
            'contact' => $validated['contact'],
            'address' => $validated['address_1'],
            'address_2' => $validated['address_2'],
            'fax' => $validated['fax'],
            'city' => $validated['city'],
            'state' => $validated['state'],
            'zip' => $validated['state'],
            'country' => $validated['contact'],
            'wallet' => $validated['previous_balance'],
        ]);

        $manufacturer->assignRole('Manufacturer');

        return response()->json([
            'message' => __('Manufacturer Created Successfully'),
            'redirect' => route('admin.manufacturer.index')
        ]);
    }

    public function show(User $manufacturer)
    {
        return view('manufacturer::show');
    }

    public function edit(User $manufacturer)
    {
        return view('manufacturer::edit', compact('manufacturer'));
    }

    public function update(UpdateManufacturerRequest $request, User $manufacturer)
    {
        $validated = $request->validated();
        $manufacturer->update([
            'name' => $validated['manufacturer_name'],
            'email' => $validated['manufacturer_email'],
            'avatar' => 'https://avatars.dicebear.com/api/adventurer/'.str($validated['manufacturer_name'])->slug().'.svg',
            'mobile' => $validated['manufacturer_mobile'],
            'phone' => $validated['phone'],
            'secondary_email' => $validated['secondary_email'],
            'contact' => $validated['contact'],
            'address' => $validated['address_1'],
            'address_2' => $validated['address_2'],
            'fax' => $validated['fax'],
            'city' => $validated['city'],
            'state' => $validated['state'],
            'zip' => $validated['state'],
            'country' => $validated['contact'],
        ]);

        return response()->json([
            'message' => __('Manufacturer Updated Successfully'),
            'redirect' => route('admin.manufacturer.index')
        ]);
    }

    public function destroy(User $manufacturer)
    {
        if (!$manufacturer->hasRole('Manufacturer')){
            return response()->json([
                'message' => __("This user is not a valid manufacturer")
            ], 403);
        }

        $manufacturer->delete();

        return response()->json([
            'message' => __('Manufacturer Deleted Successfully'),
            'redirect' => route('admin.manufacturer.index')
        ]);
    }
}
