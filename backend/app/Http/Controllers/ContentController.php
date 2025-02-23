<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Content;
use App\Models\Faq;
use App\Models\HeroImage;
use App\Models\WhyChooseUs;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContentController extends Controller
{
    public function index(): JsonResponse
    {
        $data = Content::query()->with(["contacts", "faqs", "heroImages", "whyChooseUs"])->firstOrFail();
        return response()->json([
            "data" => $data
        ]);
    }
}
