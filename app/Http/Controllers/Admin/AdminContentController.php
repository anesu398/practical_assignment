use Illuminate\Http\Request;
use App\Models\Content;

class AdminContentController extends Controller
{
    public function index()
    {
        $content = Content::where('section', 'hero')->get();
        return view('admin.content', compact('content'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        Content::updateOrCreate(
            ['section' => 'hero', 'key' => 'title'],
            ['value' => $request->input('title')]
        );

        Content::updateOrCreate(
            ['section' => 'hero', 'key' => 'description'],
            ['value' => $request->input('description')]
        );

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            Content::updateOrCreate(
                ['section' => 'hero', 'key' => 'image'],
                ['value' => 'storage/' . $imagePath]
            );
        }

        return redirect()->back()->with('success', 'Content updated successfully.');
    }
}
