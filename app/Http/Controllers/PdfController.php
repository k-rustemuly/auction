<?php

namespace App\Http\Controllers;

use App\Http\Requests\PdfRemoveRequest;
use setasign\Fpdi\Fpdi;

class PdfController extends Controller
{
    public function removePage(PdfRemoveRequest $request)
    {
        $pageToRemove = (int)$request->page;
        $file = storage_path('app/public/' . $request->file);
        $tmpFile = storage_path('app/public/tmp_' . basename($file));

        $pdf = new Fpdi();
        $pageCount = $pdf->setSourceFile($file);

        for ($i = 1; $i <= $pageCount; $i++) {
            if ($i === $pageToRemove) {
                continue;
            }

            $tpl = $pdf->importPage($i);
            $size = $pdf->getTemplateSize($tpl);

            $pdf->AddPage($size['orientation'], [$size['width'], $size['height']]);
            $pdf->useTemplate($tpl);
        }

        $pdf->Output($tmpFile, 'F');

        rename($tmpFile, $file);

        return response()->json(['success' => true]);
    }
}
