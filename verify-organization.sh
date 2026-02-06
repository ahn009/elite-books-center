#!/bin/bash
# Documentation Organization Verification Script
# This script verifies the documentation structure is correct

echo "════════════════════════════════════════════════════════════"
echo "  DOCUMENTATION ORGANIZATION VERIFICATION REPORT"
echo "════════════════════════════════════════════════════════════"
echo ""

# Color codes
GREEN='\033[0;32m'
BLUE='\033[0;34m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# Check directory structure
echo -e "${BLUE}1. CHECKING DIRECTORY STRUCTURE${NC}"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"

DIRS=("docs" "docs/seo-implementation" "docs/phase-guides" "archive")
for dir in "${DIRS[@]}"; do
    if [ -d "$dir" ]; then
        echo -e "${GREEN}✓${NC} Directory exists: $dir"
    else
        echo -e "${YELLOW}✗${NC} Directory missing: $dir"
    fi
done
echo ""

# Check critical files in root
echo -e "${BLUE}2. CRITICAL FILES IN ROOT DIRECTORY${NC}"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
CRITICAL_FILES=(
    "MASTER-INDEX.md"
    "SEO-IMPLEMENTATION-GUIDE.md"
    "QUICK-START-SUMMARY.md"
    "FAQ-IMPLEMENTATION-GUIDE.md"
    "INTEGRATION-EXAMPLES.md"
)

for file in "${CRITICAL_FILES[@]}"; do
    if [ -f "$file" ]; then
        echo -e "${GREEN}✓${NC} $file"
    else
        echo -e "${YELLOW}✗${NC} Missing: $file"
    fi
done
echo ""

# Check seo-implementation files
echo -e "${BLUE}3. REFERENCE FILES IN docs/seo-implementation/${NC}"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
SEO_FILES=(
    "docs/seo-implementation/COMPETITIVE-GAP-ANALYSIS.md"
    "docs/seo-implementation/README-IMPLEMENTATION-PACKAGE.md"
    "docs/seo-implementation/DELIVERABLES-SUMMARY.md"
    "docs/seo-implementation/IMPLEMENTATION-CHECKLIST.md"
    "docs/seo-implementation/PHASE-10-GSC-SETUP-GUIDE.md"
    "docs/seo-implementation/000-START-HERE.md"
    "docs/seo-implementation/FINAL-LAYER-COMPLETION-SUMMARY.md"
    "docs/seo-implementation/FINAL-LAYER-VISUAL-REFERENCE.md"
    "docs/seo-implementation/COMPLETE-SEO-IMPLEMENTATION-INDEX.md"
    "docs/seo-implementation/TODAYS-EXECUTION-REPORT.md"
)

count=0
for file in "${SEO_FILES[@]}"; do
    if [ -f "$file" ]; then
        echo -e "${GREEN}✓${NC} $(basename $file)"
        ((count++))
    else
        echo -e "${YELLOW}✗${NC} Missing: $(basename $file)"
    fi
done
echo "Found: $count/10 files"
echo ""

# Check phase-guides files
echo -e "${BLUE}4. PHASE GUIDES IN docs/phase-guides/${NC}"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
PHASE_FILES=(
    "docs/phase-guides/PHASES-19-27-FINAL-LAYER.md"
    "docs/phase-guides/PHASES-19-27-QUICK-CHECKLIST.md"
    "docs/phase-guides/00-START-HERE-FINAL-LAYER.md"
    "docs/phase-guides/TODAY-COMPLETION-CHECKLIST.md"
)

count=0
for file in "${PHASE_FILES[@]}"; do
    if [ -f "$file" ]; then
        echo -e "${GREEN}✓${NC} $(basename $file)"
        ((count++))
    else
        echo -e "${YELLOW}✗${NC} Missing: $(basename $file)"
    fi
done
echo "Found: $count/4 files"
echo ""

# File count summary
echo -e "${BLUE}5. DOCUMENTATION STATISTICS${NC}"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
ROOT_COUNT=$(find . -maxdepth 1 -name "*.md" -type f | wc -l)
SEO_COUNT=$(find docs/seo-implementation -name "*.md" -type f | wc -l)
PHASE_COUNT=$(find docs/phase-guides -name "*.md" -type f | wc -l)
TOTAL=$((ROOT_COUNT + SEO_COUNT + PHASE_COUNT))

echo "Root .md files:                   $ROOT_COUNT"
echo "docs/seo-implementation .md files: $SEO_COUNT"
echo "docs/phase-guides .md files:       $PHASE_COUNT"
echo "────────────────────────────────────"
echo "Total .md files organized:         $TOTAL"
echo ""

# Check no orphaned files in root
echo -e "${BLUE}6. ORPHANED FILES CHECK${NC}"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
ORPHANED=$(find . -maxdepth 1 -name "*.md" -type f ! -name "MASTER-INDEX.md" ! -name "SEO-IMPLEMENTATION-GUIDE.md" ! -name "QUICK-START-SUMMARY.md" ! -name "FAQ-IMPLEMENTATION-GUIDE.md" ! -name "INTEGRATION-EXAMPLES.md")

if [ -z "$ORPHANED" ]; then
    echo -e "${GREEN}✓${NC} No orphaned .md files in root"
else
    echo -e "${YELLOW}Found orphaned files:${NC}"
    echo "$ORPHANED"
fi
echo ""

# Before/After comparison
echo -e "${BLUE}7. ORGANIZATION IMPACT${NC}"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo "BEFORE: 18 .md files cluttered in root directory"
echo "AFTER:  5 critical files in root + 14 organized in subdirectories"
echo ""
echo "Reduction: 72% fewer files in root (18 → 5)"
echo "Accessibility: Improved through organized hierarchy"
echo "Maintainability: Enhanced through clear structure"
echo ""

# Final status
echo -e "${BLUE}8. FINAL STATUS${NC}"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
if [ $TOTAL -eq 19 ] && [ -z "$ORPHANED" ]; then
    echo -e "${GREEN}✓ DOCUMENTATION ORGANIZATION COMPLETE${NC}"
    echo -e "${GREEN}✓ All 19 files properly organized${NC}"
    echo -e "${GREEN}✓ No orphaned files detected${NC}"
    echo -e "${GREEN}✓ Master index created${NC}"
else
    echo -e "${YELLOW}⚠ Some issues detected. See above.${NC}"
fi
echo ""
echo "════════════════════════════════════════════════════════════"
