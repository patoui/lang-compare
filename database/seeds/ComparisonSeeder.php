<?php

use App\Comparison;
use Illuminate\Database\Seeder;

class ComparisonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comparisons = [
            // PHP
            ['lang' => 'php', 'method' => 'array_change_key_case'],
            ['lang' => 'php', 'method' => 'array_chunk'],
            ['lang' => 'php', 'method' => 'array_column'],
            ['lang' => 'php', 'method' => 'array_combine'],
            ['lang' => 'php', 'method' => 'array_count_values'],
            ['lang' => 'php', 'method' => 'array_diff_assoc'],
            ['lang' => 'php', 'method' => 'array_diff_key'],
            ['lang' => 'php', 'method' => 'array_diff_uassoc'],
            ['lang' => 'php', 'method' => 'array_diff_ukey'],
            ['lang' => 'php', 'method' => 'array_diff'],
            ['lang' => 'php', 'method' => 'array_fill_keys'],
            ['lang' => 'php', 'method' => 'array_fill'],
            ['lang' => 'php', 'method' => 'array_filter'],
            ['lang' => 'php', 'method' => 'array_flip'],
            ['lang' => 'php', 'method' => 'array_intersect_assoc'],
            ['lang' => 'php', 'method' => 'array_intersect_key'],
            ['lang' => 'php', 'method' => 'array_intersect_uassoc'],
            ['lang' => 'php', 'method' => 'array_intersect_ukey'],
            ['lang' => 'php', 'method' => 'array_intersect'],
            ['lang' => 'php', 'method' => 'array_key_exists'],
            ['lang' => 'php', 'method' => 'array_key_first'],
            ['lang' => 'php', 'method' => 'array_key_last'],
            ['lang' => 'php', 'method' => 'array_keys'],
            ['lang' => 'php', 'method' => 'array_map'],
            ['lang' => 'php', 'method' => 'array_merge_recursive'],
            ['lang' => 'php', 'method' => 'array_merge'],
            ['lang' => 'php', 'method' => 'array_multisort'],
            ['lang' => 'php', 'method' => 'array_pad'],
            ['lang' => 'php', 'method' => 'array_pop'],
            ['lang' => 'php', 'method' => 'array_product'],
            ['lang' => 'php', 'method' => 'array_push'],
            ['lang' => 'php', 'method' => 'array_rand'],
            ['lang' => 'php', 'method' => 'array_reduce'],
            ['lang' => 'php', 'method' => 'array_replace_recursive'],
            ['lang' => 'php', 'method' => 'array_replace'],
            ['lang' => 'php', 'method' => 'array_reverse'],
            ['lang' => 'php', 'method' => 'array_search'],
            ['lang' => 'php', 'method' => 'array_shift'],
            ['lang' => 'php', 'method' => 'array_slice'],
            ['lang' => 'php', 'method' => 'array_splice'],
            ['lang' => 'php', 'method' => 'array_sum'],
            ['lang' => 'php', 'method' => 'array_udiff_assoc'],
            ['lang' => 'php', 'method' => 'array_udiff_uassoc'],
            ['lang' => 'php', 'method' => 'array_udiff'],
            ['lang' => 'php', 'method' => 'array_uintersect_assoc'],
            ['lang' => 'php', 'method' => 'array_uintersect_uassoc'],
            ['lang' => 'php', 'method' => 'array_uintersect'],
            ['lang' => 'php', 'method' => 'array_unique'],
            ['lang' => 'php', 'method' => 'array_unshift'],
            ['lang' => 'php', 'method' => 'array_values'],
            ['lang' => 'php', 'method' => 'array_walk_recursive'],
            ['lang' => 'php', 'method' => 'array_walk'],
            ['lang' => 'php', 'method' => 'array'],
            ['lang' => 'php', 'method' => 'arsort'],
            ['lang' => 'php', 'method' => 'asort'],
            ['lang' => 'php', 'method' => 'compact'],
            ['lang' => 'php', 'method' => 'count'],
            ['lang' => 'php', 'method' => 'current'],
            ['lang' => 'php', 'method' => 'each'],
            ['lang' => 'php', 'method' => 'end'],
            ['lang' => 'php', 'method' => 'extract'],
            ['lang' => 'php', 'method' => 'in_array'],
            ['lang' => 'php', 'method' => 'key_exists'],
            ['lang' => 'php', 'method' => 'key'],
            ['lang' => 'php', 'method' => 'krsort'],
            ['lang' => 'php', 'method' => 'ksort'],
            ['lang' => 'php', 'method' => 'list'],
            ['lang' => 'php', 'method' => 'natcasesort'],
            ['lang' => 'php', 'method' => 'natsort'],
            ['lang' => 'php', 'method' => 'next'],
            ['lang' => 'php', 'method' => 'pos'],
            ['lang' => 'php', 'method' => 'prev'],
            ['lang' => 'php', 'method' => 'range'],
            ['lang' => 'php', 'method' => 'reset'],
            ['lang' => 'php', 'method' => 'rsort'],
            ['lang' => 'php', 'method' => 'shuffle'],
            ['lang' => 'php', 'method' => 'sizeof'],
            ['lang' => 'php', 'method' => 'sort'],
            ['lang' => 'php', 'method' => 'uasort'],
            ['lang' => 'php', 'method' => 'uksort'],
            ['lang' => 'php', 'method' => 'usort'],
            // JAVASCRIPT
            ['lang' => 'javascript', 'method' => 'from'],
            ['lang' => 'javascript', 'method' => 'isArray'],
            ['lang' => 'javascript', 'method' => 'of'],
            ['lang' => 'javascript', 'method' => 'concat'],
            ['lang' => 'javascript', 'method' => 'copyWithin'],
            ['lang' => 'javascript', 'method' => 'entries'],
            ['lang' => 'javascript', 'method' => 'every'],
            ['lang' => 'javascript', 'method' => 'fill'],
            ['lang' => 'javascript', 'method' => 'filter'],
            ['lang' => 'javascript', 'method' => 'find'],
            ['lang' => 'javascript', 'method' => 'findIndex'],
            ['lang' => 'javascript', 'method' => 'forEach'],
            ['lang' => 'javascript', 'method' => 'includes'],
            ['lang' => 'javascript', 'method' => 'indexOf'],
            ['lang' => 'javascript', 'method' => 'join'],
            ['lang' => 'javascript', 'method' => 'keys'],
            ['lang' => 'javascript', 'method' => 'lastIndexOf'],
            ['lang' => 'javascript', 'method' => 'map'],
            ['lang' => 'javascript', 'method' => 'pop'],
            ['lang' => 'javascript', 'method' => 'push'],
            ['lang' => 'javascript', 'method' => 'reduce'],
            ['lang' => 'javascript', 'method' => 'reduceRight'],
            ['lang' => 'javascript', 'method' => 'reverse'],
            ['lang' => 'javascript', 'method' => 'shift'],
            ['lang' => 'javascript', 'method' => 'slice'],
            ['lang' => 'javascript', 'method' => 'some'],
            ['lang' => 'javascript', 'method' => 'sort'],
            ['lang' => 'javascript', 'method' => 'splice'],
            ['lang' => 'javascript', 'method' => 'toLocaleString'],
            ['lang' => 'javascript', 'method' => 'toSource'],
            ['lang' => 'javascript', 'method' => 'toString'],
            ['lang' => 'javascript', 'method' => 'unshift'],
            ['lang' => 'javascript', 'method' => 'values'],
        ];

        foreach ($comparisons as $key => $comparison) {
            $exists = DB::table('comparisons')->where($comparison)->exists();

            if (!$exists) {
                DB::table('comparisons')->insert($comparison);
            }
        }

        $this->seedPHPMatches();
    }

    public function seedPHPMatches()
    {
        $phpArraySearch = Comparison::where([
            'lang' => 'php',
            'method' => 'array_search',
        ])->first();
        $javascriptIds = DB::table('comparisons')
            ->where('lang', 'javascript')
            ->whereIn('method', ['indexOf'])
            ->pluck('id');
        $phpArraySearch->matches()->sync($javascriptIds, false);
    }
}
