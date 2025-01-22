<?php

namespace App\Http\Controllers;

use App\Models\Cotxes;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CotxesController extends Controller
{
    public function index(): View {
        $cotxes = Cotxes::all();
        return view('cotxes.index', compact('cotxes'));
    }

    public function create(): View {
        return view('cotxes.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'any_fabricacio' => 'required|integer',
            'price' => 'required|integer',
            'categoria' => 'required'
        ]);

        Cotxes::create($request->all());

        return redirect()->route('cotxes.index');
    }

    public function edit(Cotxes $cotxe): View {
        return view('cotxes.edit', compact('cotxe'));
    }

    public function update(Request $request, Cotxes $cotxe): RedirectResponse {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'any_fabricacio' => 'required|integer',
            'price' => 'required|integer',
            'categoria' => 'required'
        ]);

        $cotxe->update($request->all());

        return redirect()->route('cotxes.index');
    }

    public function delete(Cotxes $cotxe): View {
        return view('cotxes.delete', compact('cotxe'));
    }

    public function destroy(Cotxes $cotxe): RedirectResponse {
        $cotxe->delete();
        return redirect()->route('cotxes.index');
    }

    public function show(Cotxes $cotxe): View {
        return view('cotxes.show', compact('cotxe'));
    }
}

