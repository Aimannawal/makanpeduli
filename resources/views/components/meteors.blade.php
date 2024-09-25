@props(['number' => 20])

<div class="relative overflow-hidden h-screen">
    @for ($i = 0; $i < $number; $i++)
        @php
            $left = rand(0, 100); // Persentase untuk posisi left
            $animationDelay = rand(20, 80) / 100; // Delay dari 0.2 hingga 0.8 detik
            $animationDuration = rand(2000, 10000) / 1000; // Durasi dari 2 hingga 10 detik
        @endphp
        <span class="pointer-events-none absolute left-[{{ $left }}%] top-[-5px] rotate-[215deg] animate-meteor rounded-full bg-slate-500 shadow-[0_0_0_1px_#ffffff10]"
              style="
                  animation-delay: {{ $animationDelay }}s;
                  animation-duration: {{ $animationDuration }}s;
              ">
            <!-- Meteor Tail -->
            <div class="pointer-events-none absolute top-1/2 -z-10 h-px w-[50px] -translate-y-1/2 bg-gradient-to-r from-slate-500 to-transparent"></div>
        </span>
    @endfor
</div>
