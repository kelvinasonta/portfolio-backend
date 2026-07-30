<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;

class InquiryController extends Controller
{
    public function storeContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'project_type' => 'nullable|string|max:255',
            'budget' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        $validated['type'] = 'contact';
        Inquiry::create($validated);

        return response()->json(['message' => 'Message sent successfully.']);
    }

    public function storeProject(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'project_type' => 'required|string|max:255',
            'budget' => 'required|string|max:255',
            'timeline' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);

        $validated['type'] = 'project';
        Inquiry::create($validated);

        return response()->json(['message' => 'Project inquiry sent successfully.']);
    }
}
