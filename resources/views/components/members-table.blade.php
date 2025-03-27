<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-center">ทะเบียนสมาชิก</h1>

    <div class="relative mb-6">
        <input
            type="text"
            placeholder="ค้นหาจากรหัส ชื่อ โรงเรียน หรือหมายเหตุ"
            id="memberSearch"
            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
        />
    </div>

    <div class="border-b border-gray-200 mb-6">
        <div class="flex -mb-px">
            <button
                onclick="switchTab('regular')"
                id="regularTab"
                class="w-1/2 py-4 px-1 text-center border-b-2 font-medium text-sm border-blue-500 text-blue-600"
            >
                สมาชิกสามัญ (<span id="regularCount">{{ $members->where('type', 'normal')->where('status', 'active')->count() }}</span>)
            </button>
            <button
                onclick="switchTab('extraordinary')"
                id="extraordinaryTab"
                class="w-1/2 py-4 px-1 text-center border-b-2 font-medium text-sm border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300"
            >
                สมาชิกวิสามัญ (<span id="extraordinaryCount">{{ $members->where('type', 'extra')->where('status', 'active')->count() }}</span>)
            </button>
            <button
                onclick="switchTab('honor')"
                id="honorTab"
                class="w-1/2 py-4 px-1 text-center border-b-2 font-medium text-sm border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300"
            >
                สมาชิกกิตติมศักดิ์ (<span id="honorCount">{{ $members->where('type', 'honor')->where('status', 'active')->count() }}</span>)
            </button>
        </div>
    </div>

    <div id="regularMembers">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            รหัส
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            ชื่อ-นามสกุล
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            โรงเรียน
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            หมายเหตุ
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200" id="regularMembersBody">
                    @foreach($members->where('type', 'normal')->where('status', 'active') as $member)
                    <tr class="member-row" data-type="regular" data-search="{{ strtolower($member->member_id . ' ' . $member->name . ' ' . $member->school . ' ' . ($member->note ?? '')) }}">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $member->member_id }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $member->name }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $member->school }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $member->note ?? '-' }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div id="regularNoResults" class="text-center py-4 text-gray-500" style="display: none;">
                ไม่พบข้อมูลที่ค้นหา
            </div>
        </div>
    </div>

    <div id="extraordinaryMembers" style="display: none;">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            รหัส
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            ชื่อ-นามสกุล
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            โรงเรียน
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            หมายเหตุ
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200" id="extraordinaryMembersBody">
                    @foreach($members->where('type', 'extra')->where('status', 'active') as $member)
                    <tr class="member-row" data-type="extraordinary" data-search="{{ strtolower($member->member_id . ' ' . $member->name . ' ' . $member->school . ' ' . ($member->note ?? '')) }}">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $member->member_id }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $member->name }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $member->school }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $member->note ?? '-' }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div id="extraordinaryNoResults" class="text-center py-4 text-gray-500" style="display: none;">
                ไม่พบข้อมูลที่ค้นหา
            </div>
        </div>
    </div>

    <div id="honorMembers" style="display: none;">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            รหัส
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            ชื่อ-นามสกุล
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            โรงเรียน
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            หมายเหตุ
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200" id="honorMembersBody">
                    @foreach($members->where('type', 'honor')->where('status', 'active') as $member)
                    <tr class="member-row" data-type="honor" data-search="{{ strtolower($member->member_id . ' ' . $member->name . ' ' . $member->school . ' ' . ($member->note ?? '')) }}">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $member->member_id }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $member->name }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $member->school }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $member->note ?? '-' }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div id="honorNoResults" class="text-center py-4 text-gray-500" style="display: none;">
                ไม่พบข้อมูลที่ค้นหา
            </div>
        </div>
    </div>
{{-- 
    <div class="text-sm text-gray-500 text-center mt-4">
        จำนวนสมาชิกทั้งหมด: {{ $members->count() }} คน (สามัญ {{ $members->where('type', 'normal')->count() }} คน, 
        วิสามัญ {{ $members->where('type', 'extra')->count() }} คน)
    </div> --}}
</div>

<script>
    function switchTab(tab) {
        if (tab === 'regular') {
            document.getElementById('regularTab').classList.add('border-blue-500', 'text-blue-600');
            document.getElementById('regularTab').classList.remove('border-transparent', 'text-gray-500');
            document.getElementById('extraordinaryTab').classList.add('border-transparent', 'text-gray-500');
            document.getElementById('extraordinaryTab').classList.remove('border-blue-500', 'text-blue-600');
            document.getElementById('regularMembers').style.display = 'block';
            document.getElementById('extraordinaryMembers').style.display = 'none';
        } else if (tab === 'extraordinary') {
            document.getElementById('extraordinaryTab').classList.add('border-blue-500', 'text-blue-600');
            document.getElementById('extraordinaryTab').classList.remove('border-transparent', 'text-gray-500');
            document.getElementById('regularTab').classList.add('border-transparent', 'text-gray-500');
            document.getElementById('regularTab').classList.remove('border-blue-500', 'text-blue-600');
            document.getElementById('honorTab').classList.add('border-transparent', 'text-gray-500');
            document.getElementById('honorTab').classList.remove('border-blue-500', 'text-blue-600');
            document.getElementById('regularMembers').style.display = 'none';
            document.getElementById('extraordinaryMembers').style.display = 'block';
            document.getElementById('honorMembers').style.display = 'none';
        } else {
            document.getElementById('honorTab').classList.add('border-blue-500', 'text-blue-600');
            document.getElementById('honorTab').classList.remove('border-transparent', 'text-gray-500');
            document.getElementById('regularTab').classList.add('border-transparent', 'text-gray-500');
            document.getElementById('regularTab').classList.remove('border-blue-500', 'text-blue-600');
            document.getElementById('extraordinaryTab').classList.add('border-transparent', 'text-gray-500');
            document.getElementById('extraordinaryTab').classList.remove('border-blue-500', 'text-blue-600');
            document.getElementById('regularMembers').style.display = 'none';
            document.getElementById('extraordinaryMembers').style.display = 'none';
            document.getElementById('honorMembers').style.display = 'block';
        }
        filterMembers(); // Apply current search filter to the new tab
    }

    function filterMembers() {
        const searchQuery = document.getElementById('memberSearch').value.toLowerCase();
        const activeTab = document.getElementById('regularTab').classList.contains('border-blue-500') ? 'regular' : 
                         document.getElementById('extraordinaryTab').classList.contains('border-blue-500') ? 'extraordinary' : 'honor';
        
        let visibleCount = 0;
        
        document.querySelectorAll('.member-row').forEach(row => {
            if (row.dataset.type === activeTab) {
                if (row.dataset.search.includes(searchQuery)) {
                    row.style.display = '';
                    visibleCount++;
                } else {
                    row.style.display = 'none';
                }
            }
        });

        // Show/hide no results message
        if (activeTab === 'regular') {
            document.getElementById('regularNoResults').style.display = visibleCount === 0 ? 'block' : 'none';
        } else if (activeTab === 'extraordinary') {
            document.getElementById('extraordinaryNoResults').style.display = visibleCount === 0 ? 'block' : 'none';
        } else {
            document.getElementById('honorNoResults').style.display = visibleCount === 0 ? 'block' : 'none';
        }    }

    // Initialize event listeners
    document.getElementById('memberSearch').addEventListener('input', filterMembers);
    document.addEventListener('DOMContentLoaded', function() {
        filterMembers(); // Initial filter in case there's any search text
    });</script>