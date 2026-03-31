<!-- <script src="https://cdn.tailwindcss.com"></script>
<div class="min-h-screen bg-gray-100 flex items-center justify-center p-6">
    <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8">
        <h1 class="text-2xl font-bold text-gray-800 mb-2">Generate PDF</h1>
        <p class="text-gray-500 mb-6 text-sm">Enter the details below to create your document.</p>

        <form action="/submit-form" method="POST" class="space-y-4">
            @csrf
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                <input type="text" name="name" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                <input type="email" name="email" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                <textarea name="message" rows="4" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"></textarea>
            </div>

            <button type="submit" 
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 rounded-lg shadow-md transition-colors">
                Generate PDF
            </button>
        </form>
    </div>
</div> -->


<div class="min-h-screen bg-slate-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto">
        
        <div class="bg-white rounded-t-xl shadow-sm p-6 border-b border-slate-100">
            <h1 class="text-2xl font-extrabold text-slate-900">Custom Document Builder</h1>
            <p class="text-slate-500 text-sm mt-1">Add as many fields as you need for your PDF.</p>
        </div>

        <form action="/submit-form" method="POST" id="dynamic-form">
            @csrf
            
            <div id="fields-container" class="bg-white p-6 space-y-4">
                <div class="field-row group bg-slate-50 p-4 rounded-lg border border-slate-200 transition-all hover:border-indigo-300">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1">Field Name</label>
                            <input type="text" name="custom_fields[0][label]" placeholder="e.g., Delivery Date" 
                                class="w-full px-4 py-2 rounded-md border-slate-300 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1">Content/Value</label>
                            <input type="text" name="custom_fields[0][value]" placeholder="e.g., 2024-12-25" 
                                class="w-full px-4 py-2 rounded-md border-slate-300 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none">
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-slate-100 rounded-b-xl p-6 flex flex-col sm:flex-row justify-between items-center gap-4">
                <button type="button" id="add-field" 
                    class="inline-flex items-center px-4 py-2 bg-white border border-slate-300 rounded-md font-semibold text-slate-700 shadow-sm hover:bg-slate-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-all">
                    <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d=" activism12 4v16m8-8H4"></path></svg>
                    Add New Field
                </button>

                <button type="submit" 
                    class="w-full sm:w-auto px-8 py-2 bg-indigo-600 text-white font-bold rounded-md shadow-lg hover:bg-indigo-700 hover:shadow-indigo-200 focus:ring-4 focus:ring-indigo-300 transition-all">
                    Generate PDF
                </button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.tailwindcss.com"></script>

<script>
    let fieldCount = 1;
    const container = document.getElementById('fields-container');

    document.getElementById('add-field').addEventListener('click', function() {
        const div = document.createElement('div');
        div.className = "field-row group bg-slate-50 p-4 rounded-lg border border-slate-200 animate-in fade-in slide-in-from-top-2 duration-300";
        
        div.innerHTML = `
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1">Field Name</label>
                    <input type="text" name="custom_fields[${fieldCount}][label]" placeholder="Field Label" 
                        class="w-full px-4 py-2 rounded-md border-slate-300 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1">Content/Value</label>
                    <div class="flex gap-2">
                        <input type="text" name="custom_fields[${fieldCount}][value]" placeholder="Value" 
                            class="w-full px-4 py-2 rounded-md border-slate-300 shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none">
                        <button type="button" onclick="this.closest('.field-row').remove()" class="text-red-400 hover:text-red-600 p-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        </button>
                    </div>
                </div>
            </div>
        `;
        container.appendChild(div);
        fieldCount++;
    });
</script>